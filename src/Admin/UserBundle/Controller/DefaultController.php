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
              } else {
                  $docente = null;
              } 
        
        return $this->render('AdminUserBundle:Default:index.html.twig',array(
            'escuela'      => $escuela,
            'user'  => $user,
            ));
    }
}
