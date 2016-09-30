<?php

namespace Admin\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Request;
use Admin\MedBundle\Entity\Instrumento;
use Admin\UnadBundle\Entity\Docente;


class DefaultController extends Controller
{
    public function indexAction(Request $request){
        $em = $this->getDoctrine()->getManager();
        $instrumentos = $em->getRepository('AdminMedBundle:Instrumento')->findAll();
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
            'periodo' => $this->container->getParameter('appmed.periodo'),
            ));
    }
    
    public function homeAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $instrumentos = $em->getRepository('AdminMedBundle:Instrumento')->findAll();
        //$request = $this->getRequest();
        $session = $request->getSession();
        $cedula_usuario = $request->request->get('cedula_usuario');
        $nombres_usuario = $request->request->get('nombres_usuario');
        $apellidos_usuario = $request->request->get('apellidos_usuario');
        $email_usuario = $request->request->get('email_usuario');
        $autenticacion = $request->request->get('autenticacion');
        
        $url_autenticacion = "http://login.unad.edu.co/";
        $urlInicioApp  = "http://med.unad.edu.co/";
        //$urlServerApp  = "/login_check";
        $urlPeticion = $request->server->get('HTTP_REFERER');
        
        //------------- Origenes validos ----------------------------------------------------------
        $urlOrigenValido1 =	"https://intranet.unad.edu.co/autenticacion.php"; //cuando accede por el home de intranet
        $urlOrigenValido2 =	$url_autenticacion."Usuario/envioDatosUsuario.php"; //cuando accede por login.unad.edu.co
        $urlOrigenValido3 =	$url_autenticacion."Usuario/envioDatosUsuario.php?continue=".$urlInicioApp; //cuando accede por login.unad.edu.co 
        //
        //-----------------------------------------------------------------------------------------
        
       if($cedula_usuario!="" && $autenticacion=="Aceptada" && ($urlPeticion == $urlOrigenValido1 || $urlPeticion == $urlOrigenValido2 || $urlPeticion == $urlOrigenValido3)){
        //	enviarFormulario();
       $session = $this->get('session');
       $session->set('cedula_usuario', $cedula_usuario);
      
        return $this->render('AdminUserBundle:Default:home.html.twig', array(
            // el último nombre de usuario ingresado por el usuario
        'cedula_usuario' => $cedula_usuario,
        'nombres_usuario' => $nombres_usuario,
        'apellidos_usuario' => $apellidos_usuario,
        'autenticacion' => $autenticacion,
        'urlPeticion'   => $urlPeticion,
        'email_usuario'  => $email_usuario,
        'instrumentos' => $instrumentos,
         'url1'    => $urlOrigenValido1,
         'url2'  => $urlOrigenValido2,    
        ));
        //echo("<script type='text/javascript'>location.href='siga.php';</script>");

       }
        else{
        return $this->render('AdminUserBundle:Default:home.html.twig', array(
            // el último nombre de usuario ingresado por el usuario
        'cedula_usuario' => $cedula_usuario,
        'nombres_usuario' => 'nn',
        'apellidos_usuario' => 'nn',
        'autenticacion' => 'nn',
        'urlPeticion'   => $urlPeticion,
          'url1'    => $urlOrigenValido1,
          'url2'  => $urlOrigenValido2,
        'email_usuario'  => 'nn',
        'instrumentos' => $instrumentos,    
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
}
