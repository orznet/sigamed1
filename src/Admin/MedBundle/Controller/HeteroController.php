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
 * @Route("/unad/hetero")
 */
class HeteroController extends Controller
{
    
        /**
     * Lists all hetero semestre actual
     *
     * @Route("/pcurso/{pe}", name="hetero_index")
     * @Method("GET")
     * @Template("Hetero/index.html.twig")
     */
    public function indexAction($pe)
    {
       $em = $this->getDoctrine()->getManager();
        
       $entities = $em->getRepository('AdminMedBundle:Heterocursos')->findBy(array('semestre' => $pe));
       return array(
       'entities' => $entities,
       );
    }
    
    
        /**
     * Mostrar promedio escuelas
     * @Route("/prom_esc", name="hetero_prom_esc")
     * @Method("GET")
     * @Template("Hetero/promescuela.html.twig")
     */
    public function heteroescuelasAction() {
        $em = $this->getDoctrine()->getManager();
        $data = $em->getRepository('AdminMedBundle:Heteroeval')->getPromedioescuela();
        return array(
            'data' => $data
        );
    }
    
    
     /**
     * Listado de hetero escuela en periodo x
     * @Route("/es_pe/{esc}/{pe}", name="hetero_prom_esc")
     * @Method("GET")
     * @Template("Hetero/heteroescuelas.html.twig")
     */
    public function escuelaperiodoAction($esc,$pe) {
        $em = $this->getDoctrine()->getManager();
        $docentes = $em->getRepository('AdminUnadBundle:Docente')->findBy(array('periodo' => $pe, 'escuela' => $esc));
        $hetero = $em->getRepository('AdminMedBundle:Heteroeval')->findBy(array('docente' => $docentes));
        $escuela = $em->getRepository('AdminUnadBundle:Escuela')->find($esc);
        return array(
            'hetero' => $hetero,
            'escuela' => $escuela,
            'pe'   => $pe
        );
    }
}
