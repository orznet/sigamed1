<?php
// proyecto/src/MDW/BlogBundle/Controller/SecurityController.php
namespace Admin\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\HttpFoundation\Session\Session;

class SecurityController extends Controller
{
    public function loginAction()
    {
        $request = $this->getRequest();
        $session = $request->getSession();
        // obtiene el error de inicio de sesión si lo hay
        
        if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
        $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
        } else {
          
          $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
        }
         return $this->render('AdminUserBundle:Security:login.html.twig', array(
            // el último nombre de usuario ingresado por el usuario
            'last_username' => $session->get(SecurityContext::LAST_USERNAME),
            'error'         => $error,
            ));     
        //$this->get('session')->getFlashBag()->add('error', $error->getMessage().' '.$session->get(SecurityContext::LAST_USERNAME).' No corresponde a un usuario en el Módulo MED');          
       // return $this->redirect($this->generateUrl('admin_user_home'));   
    }
}