<?php

namespace Admin\MedBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Admin\MedBundle\Entity\Plangestion;
use Admin\MedBundle\Form\PlangestionType;

/**
 * Plangestion controller.
 *
 * @Route("/doc/plangestion")
 */
class PlangestionController extends Controller
{

    /**
     * Lists all Plangestion entities.
     *
     * @Route("/", name="plangestion")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AdminMedBundle:Plangestion')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Plangestion entity.
     *
     * @Route("/", name="plangestion_create")
     * @Method("POST")
     * @Template("AdminMedBundle:Plangestion:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Plangestion();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('plangestion_show', array('id' => $entity->getId())));
        }
        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a Plangestion entity.
    *
    * @param Plangestion $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Plangestion $entity)
    {
        $form = $this->createForm(new PlangestionType(), $entity, array(
            'action' => $this->generateUrl('plangestion_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Plangestion entity.
     *
     * @Route("/new", name="plangestion_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Plangestion();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Plangestion entity.
     *
     * @Route("/{id}", name="plangestion_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdminMedBundle:Plangestion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Plangestion entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Plangestion entity.
     *
     * @Route("/{id}/edit", name="plangestion_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdminMedBundle:Plangestion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Plangestion entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
    * Creates a form to edit a Plangestion entity.
    *
    * @param Plangestion $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Plangestion $entity)
    {
        $form = $this->createForm(new PlangestionType(), $entity, array(
            'action' => $this->generateUrl('plangestion_update', array('id' => $entity->getId()->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Plangestion entity.
     *
     * @Route("/{id}", name="plangestion_update")
     * @Method("PUT")
     * @Template("AdminMedBundle:Plangestion:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdminMedBundle:Plangestion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Plangestion entity.');
        }
        
        $actividades = $entity->getActividades();
        $suma = $aux = 0;
        foreach ($actividades as $actividad ){
        $suma = $suma + $actividad->getAutoevaluacion();
        $aux++;
        }
        $entity->setAutoevaluacion($suma/$aux);
        $entity->setFechaAutoevaluacion(new \DateTime());
        $entity->setEstado(10);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);
        if ($editForm->isValid()) {
            $em->flush();
            return $this->redirect($this->generateUrl('plangestion_show', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
        );
    }
    /**
     * Deletes a Plangestion entity.
     *
     * @Route("/{id}", name="plangestion_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AdminMedBundle:Plangestion')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Plangestion entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('plangestion'));
    }

    /**
     * Creates a form to delete a Plangestion entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('plangestion_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
