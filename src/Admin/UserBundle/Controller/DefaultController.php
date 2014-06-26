<?php

namespace Admin\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Request;


class DefaultController extends Controller
{
    public function indexAction(Request $request){
         $session = $request->getSession();
        if (true === $this->container->get('security.context')->isGranted('ROLE_DEC')) {
                  $escuelas = $this->getUser()->getDecano();
                  $escuela = $escuelas[0];
                 $session->set('escuelaid', $escuela->getId()); 
              } else {
                  $escuela = null;
              }
              
        if (true === $this->container->get('security.context')->isGranted('ROLE_SECA')) {
                  $escuelas = $this->getUser()->getSecretaria();
                  $escuela = $escuelas[0];
                 $session->set('escuelaid', $escuela->getId()); 
              } else {
                  $escuela = null;
              } 
              
        $user = $this->getUser()->getUsername();
        
        if (true === $this->container->get('security.context')->isGranted('ROLE_DOC')) {
                 $docentes = $this->getUser()->getDocente();
                 $docente = $docentes[0];
                 $session->set('docenteid', $docente->getId());
                 return $this->render('AdminUnadBundle:Docente:show.html.twig',array(
                    'entity'  => $docente,
                    ));
              } else {
                  $docente = null;
              } 
        
        return $this->render('AdminUserBundle:Default:index.html.twig',array(
            'escuela'      => $escuela,
            'user'  => $user,
            ));
    }
    
    public function homeAction()
    {
        $request = $this->getRequest();
        $session = $request->getSession();
        $cedula_usuario = $request->request->get('cedula_usuario');
        $nombres_usuario = $request->request->get('nombres_usuario');
        $apellidos_usuario = $request->request->get('apellidos_usuario');
        $email_usuario = $request->request->get('email_usuario');
        $autenticacion = $request->request->get('autenticacion');
        
        $url_autenticacion = "http://login.unad.edu.co/";
        $urlInicioApp  = "http://siga.unad.edu.co/";
        //$urlServerApp  = "/login_check";
        $urlPeticion = $request->server->get('HTTP_REFERER');

        //------------- Origenes validos ----------------------------------------------------------
        //$urlOrigenValido1 =	"http://intranet.unad.edu.co/autenticacion.php?continue=".$urlInicioApp; //cuando accede por el home de intranet
        $urlOrigenValido2 =	$url_autenticacion."Usuario/envioDatosUsuario.php"; //cuando accede por login.unad.edu.co 
        //-----------------------------------------------------------------------------------------
        
       if($cedula_usuario!="" && $autenticacion=="Aceptada" && $urlPeticion == $urlOrigenValido2){
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
        ));
        //echo("<script type='text/javascript'>location.href='siga.php';</script>");

       }
        else{
        return $this->render('AdminUserBundle:Default:home.html.twig', array(
            // el último nombre de usuario ingresado por el usuario
        'cedula_usuario' => $cedula_usuario,
        'nombres_usuario' => $nombres_usuario,
        'apellidos_usuario' => $apellidos_usuario,
        'autenticacion' => $autenticacion,
        'urlPeticion'   => $urlPeticion,
        'email_usuario'  => $email_usuario,
        ));
        }
    }
    
    public function sendAction(){    
    $request = $this->getRequest();
    $session = $request->getSession();
    $cedula_usuario = $session->get('cedula_usuario');
    $pass = $request->server->get('SYMFONY_PASS');
	$formulario ="<form method='post' name='datos' action='/login_check'>";
	$formulario.="<input id='username' type='hidden' name='_username' value=$cedula_usuario />";
	$formulario.="<input id='password' type='hidden' name='_password' value=$pass />";
	$formulario.="</form>";
	$formulario.="<script>document.forms[0].submit(); </script>";	
	echo $formulario;
    }
}
