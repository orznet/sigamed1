<?php

namespace Admin\MedBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Admin\MedBundle\Entity\Heteroeval;
use Admin\MedBundle\Entity\Heterocursos;


/**
 * Plangestion controller.
 *
 * @Route("/doc/hetero")
 */
class HeteroController extends Controller
{
    
        /**
     * Lists all hetero semestre actual
     *
     * @Route("/index/{ced}", name="hetero_index")
     * @Method("GET")
     * @Template("Hetero/index.html.twig")
     */
    public function indexAction($ced)
    {
       $em = $this->getDoctrine()->getManager();
       
       //$session = $this->getRequest()->getSession();
       //$docente = $em->getRepository('AdminUnadBundle:Docente')->find($session->get('docenteid'));
        
       $entities = $em->getRepository('AdminMedBundle:Heterocursos')->findBy(array('semestre' => $this->container->getParameter('appmed.periodo', 'cedula', $ced)));
       return array(
       'entities' => $entities,
       );
    }
    
}
