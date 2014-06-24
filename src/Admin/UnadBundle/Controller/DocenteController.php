<?php

namespace Admin\UnadBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Admin\UnadBundle\Entity\Docente;
use Admin\UnadBundle\Entity\Escuela;
use Admin\UnadBundle\Form\DocenteType;

/**
 * Docente controller.
 *
 * @Route("/unad/docente")
 */
class DocenteController extends Controller
{

    /**
     * Lists all Docente entities.
     *
     * @Route("/", name="docente")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AdminUnadBundle:Docente')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    
        /**
     * Lists all Docente entities.
     *
     * @Route("/esc/{id}", name="docente_escuela")
     * @Method("GET")
     * @Template("AdminUnadBundle:Docente:porescuela.html.twig")
     */
    public function indexEscuelaAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $escuela = $em->getRepository('AdminUnadBundle:Escuela')->findOneBy(array('id' => $id));
        $entities = $em->getRepository('AdminUnadBundle:Docente')->findBy(array('escuela' => $escuela));
        $total = count($entities);
        return array(
            'entities' => $entities,
            'total'  => $total,
            'escuela' => $escuela,
        );
    }
    /**
     * Creates a new Docente entity.
     *
     * @Route("/", name="docente_create")
     * @Method("POST")
     * @Template("AdminUnadBundle:Docente:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Docente();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('docente_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a Docente entity.
    *
    * @param Docente $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Docente $entity)
    {
        $form = $this->createForm(new DocenteType(), $entity, array(
            'action' => $this->generateUrl('docente_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Docente entity.
     *
     * @Route("/new", name="docente_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Docente();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Docente entity.
     *
     * @Route("/{id}", name="docente_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdminUnadBundle:Docente')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Docente entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Docente entity.
     *
     * @Route("/{id}/edit", name="docente_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdminUnadBundle:Docente')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Docente entity.');
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
    * Creates a form to edit a Docente entity.
    *
    * @param Docente $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Docente $entity)
    {
        $form = $this->createForm(new DocenteType(), $entity, array(
            'action' => $this->generateUrl('docente_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Docente entity.
     *
     * @Route("/{id}", name="docente_update")
     * @Method("PUT")
     * @Template("AdminUnadBundle:Docente:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdminUnadBundle:Docente')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Docente entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('docente_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Docente entity.
     *
     * @Route("/{id}", name="docente_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AdminUnadBundle:Docente')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Docente entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('docente'));
    }

    /**
     * Creates a form to delete a Docente entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('docente_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
    
    
     /**
     * @Route("/red/{id}", name="docente_redtutores")
     * @Method("GET")
     * @Template()
     */
    public function redtutoresAction($id)
    {
       $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('AdminUnadBundle:Docente')->find($id);
        $cursos = $em->getRepository('AdminUnadBundle:Curso')->findBy(array('director' => $entity));

        return array(
            'entity' => $entity,
            'cursos'  => $cursos,
         );
    }
}
