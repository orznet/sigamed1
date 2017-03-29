<?php

namespace Admin\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Request;
use Admin\MedBundle\Entity\Instrumento;
use Admin\MedBundle\Entity\Periodoe;
use Admin\UnadBundle\Entity\Docente;


class DefaultController extends Controller
{
    public function indexAction(Request $request){
       $em = $this->getDoctrine()->getManager();
       $instrumentos = $em->getRepository('AdminMedBundle:Instrumento')->findAll();
       $periodos = $em->getRepository('AdminMedBundle:Periodoe')->findAll();
       $periodo = $em->getRepository('AdminMedBundle:Periodoe')->findOneBy(array('id' => $this->container->getParameter('appmed.periodo') ));

       $diff = date_diff($periodo->getFechainicio(),$periodo->getFechafin());
       $diff2 = date_diff($periodo->getFechainicio(),new \DateTime('now'));
       $dias = $diff->format("%a");
       $hoy = $diff2->format("%a");
       
       # $dql = "select a from AdminMedBundle:Periodoe a";
       # $query = $em->createQuery($dql);
       # $query->orderBy('Id', 'DESC');
       # $query->setMaxResults(1);
       # $periodos = $query->getResult();
        
        
         $session = $request->getSession();
        if (true === $this->container->get('security.authorization_checker')->isGranted('ROLE_DEC')) {
                  $escuelas = $this->getUser()->getDecano();
                  $escuela = $escuelas[0];
                 $session->set('escuelaid', $escuela->getId()); 
              } else {
                  $escuela = null;
              }
              
        if (true === $this->container->get('security.authorization_checker')->isGranted('ROLE_SECA')) {
                  $escuelas = $this->getUser()->getSecretaria();
                  $escuela = $escuelas[0];
                 $session->set('escuelaid', $escuela->getId()); 
              } else {
                  $escuela = null;
              }
              
        if (true === $this->container->get('security.authorization_checker')->isGranted('ROLE_DIRZ')) {
           $zonas = $this->getUser()->getDirectorzona();
           $zona = $zonas[0];
          $session->set('zonaid', $zona->getId()); 
              } else {
           $escuela = null;
           }       
              
              
        $user = $this->getUser()->getUsername();
        
        if (true === $this->container->get('security.authorization_checker')->isGranted('ROLE_USER')) {
                 
                 $docente = $em->getRepository('AdminUnadBundle:Docente')->findOneBy(array('user' => $this->getUser(),'periodo' => $this->container->getParameter('appmed.periodo')));
            //     $docentes = $this->getUser()->getDocente();
              //   $docente = $docentes[0];
                 
                    if (!$docente) {
                        $this->get('session')->getFlashBag()->add('warning', 'Usted no se encuentra registrado como Docente para el periodo de evaluación Vigente '.$this->container->getParameter('appmed.periodo').', es posible que aún no este activo por favor revise las fechas del cronograma de evaluación');          
                        
                     }else{
                     $session->set('docenteid', $docente->getId());
                    return $this->render('AdminUnadBundle:Docente:show.html.twig',array(
                    'entity'  => $docente,
                    'instrumentos' => $instrumentos,
                    ));   
                            
                  }
             } else {
                  $docente = null;
             } 
        
        return $this->render('AdminUserBundle:Default:index.html.twig',array(
            'escuela'      => $escuela,
            'user'  => $user,
            'periodo' => $periodo,
            'periodos'  => $periodos,
            'dias' => $dias,
            'hoy' => $hoy
            ));
    }
    
    public function homeAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $instrumentos = $em->getRepository('AdminMedBundle:Instrumento')->findAll();
        //$request = $this->getRequest();
        $periodo = $em->getRepository('AdminMedBundle:Periodoe')->findOneBy(array('id' => $this->container->getParameter('appmed.periodo')));
        $session = $request->getSession();
        $cedula_usuario = $request->request->get('cedula_usuario');
        $user = $em->getRepository('AdminUserBundle:User')->findOneBy(array('id' => $cedula_usuario));
        $nombres_usuario = $request->request->get('nombres_usuario');
        $apellidos_usuario = $request->request->get('apellidos_usuario');
        $email_usuario = $request->request->get('email_usuario');
        $autenticacion = $request->request->get('autenticacion');
        
        $url_autenticacion = "http://login.unad.edu.co/";
        $urlInicioApp  = "http://med.unad.edu.co/";
        //$urlServerApp  = "/login_check";
        
        $direccion_respuesta = $this->getRequest()->server->get('HTTP_REFERER');
        
        //------------- Origenes validos ----------------------------------------------------------
        $urlOrigenValido1 =	"https://intranet.unad.edu.co/autenticacion.php?continue=http://med.unad.edu.co/"; //cuando accede por el home de intranet
        $urlOrigenValido2 =	$url_autenticacion."Usuario/envioDatosUsuario.php"; //cuando accede por login.unad.edu.co
        $urlOrigenValido3 =	$url_autenticacion."Usuario/envioDatosUsuario.php?continue=".$urlInicioApp; //cuando accede por login.unad.edu.co 
        //
        //-----------------------------------------------------------------------------------------
        
       if($autenticacion=="Aceptada" && count($user) == 1 && $instrumentos[9]->getEstado()){
       $this->ingresoAction($cedula_usuario);
       }
       
       else{
       # $this->ingresoAction($cedula_usuario);    
        return $this->render('AdminUserBundle:Default:home.html.twig', array(
         // el último nombre de usuario ingresado por el usuario
        'cedula_usuario' => $cedula_usuario,
        'nombres_usuario' => $nombres_usuario,
        'apellidos_usuario' => $apellidos_usuario,
        'autenticacion' => $autenticacion,
        'direccion_respuesta'   => $direccion_respuesta,
        'email_usuario'  => $autenticacion,
        'instrumentos' => $instrumentos,
        'periodo'   => $periodo,
        'user'    => $user,
        'if'   => 'falso'
        ));
        }
        
    }
    
    public function sendAction(){    
    $request = $this->getRequest();
    $session = $request->getSession();
    $cedula_usuario = $session->get('cedula_usuario');
    $pass = $request->server->get('MED_PKW');
	$formulario ="<form method='post' name='datos' action='/login_check'>";
	$formulario.="<input id='username' type='hidden' name='_username' value=$cedula_usuario />";
	$formulario.="<input id='password' type='hidden' name='_password' value=$pass />";
	$formulario.="</form>";
	$formulario.="<script>document.forms[0].submit(); </script>";	
	echo $formulario;
    }
	
    public function ingresoAction($cedula_usuario){    
    $request = $this->getRequest();
    $pass = $request->server->get('MED_PKW');
	$formulario ="<form method='post' name='datos' action='/login_check'>";
	$formulario.="<input id='username' type='hidden' name='_username' value=$cedula_usuario />";
	$formulario.="<input id='password' type='hidden' name='_password' value=$pass />";
	$formulario.="</form>";
	$formulario.="<script>document.forms[0].submit(); </script>";	
	echo $formulario;
    }
}
