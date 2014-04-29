<?php

namespace Admin\MedBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AdminMedBundle:Default:index.html.twig', array('name' => $name));
    }
}
