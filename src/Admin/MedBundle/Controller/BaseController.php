<?php

namespace Admin\MedBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Admin\MedBundle\Entity\Heteroeval;
use Admin\MedBundle\Entity\HeteroevalRepository;

/**
 * Base controller
 * @Route("/unad/doc")
 */
class BaseController extends Controller {

    /**
     * Mostrar heteroevaluaciones
     * @Route("/{id}/heteroeval", name="heteroeval_info")
     * @Method("GET")
     * @Template()
     */
    public function heteroevalAction($id) {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('AdminUnadBundle:Docente')->find($id);
        $evaluaciones = $em->getRepository('AdminMedBundle:Heterocursos')->findBy(array('cedula' => $entity->getUser()->getId(), 'semestre' => $entity->getPeriodo()));
        return array(
            'entity' => $entity,
            'evaluaciones' => $evaluaciones
        );
    }

}
