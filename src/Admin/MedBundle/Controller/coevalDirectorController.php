<?php

namespace Admin\MedBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Admin\MedBundle\Entity\coevalDirector;
use Admin\MedBundle\Form\coevalDirectorType;

/**
 * coevalDirector controller.
 *
 * @Route("/doc/coevaldirector")
 */
class coevalDirectorController extends Controller
{

    /**
     * Lists all coevalDirector entities.
     *
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AdminMedBundle:coevalDirector')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new coevalDirector entity.
     *
     * @Route("/", name="coevaldirector_create")
     * @Method("POST")
     * @Template("AdminMedBundle:coevalDirector:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new coevalDirector();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('coevaldirector_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a coevalDirector entity.
    *
    * @param coevalDirector $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(coevalDirector $entity)
    {
        $form = $this->createForm(new coevalDirectorType(), $entity, array(
            'action' => $this->generateUrl('coevaldirector_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new coevalDirector entity.
     *
     * @Route("/new", name="coevaldirector_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new coevalDirector();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a coevalDirector entity.
     *
     * @Route("/{id}", name="coevaldirector_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdminMedBundle:coevalDirector')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find coevalDirector entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing coevalDirector entity.
     *
     * @Route("/{id}/edit", name="coevaldirector_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdminMedBundle:coevalDirector')->find($id);
        
        if (!$entity) {
        $entity = new coevalDirector();
        $em = $this->getDoctrine()->getManager();
        $curso = $em->getRepository('AdminUnadBundle:Curso')->find($id);
        $entity->setCurso($curso);
        $em->persist($entity);
        $em->flush();
        ##    throw $this->createNotFoundException('Entidad no encontrada');
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
    * Creates a form to edit a coevalDirector entity.
    *
    * @param coevalDirector $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(coevalDirector $entity)
    {
        $form = $this->createForm(new coevalDirectorType(), $entity, array(
            'action' => $this->generateUrl('coevaldirector_update', array('id' => $entity->getCurso()->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing coevalDirector entity.
     *
     * @Route("/{id}", name="coevaldirector_update")
     * @Method("PUT")
     * @Template("AdminMedBundle:coevalDirector:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdminMedBundle:coevalDirector')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find coevalDirector entity.');
        }
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        $entity->setFecha(new \DateTime()); 
        $suma = 0; $tot = 0;
        for($i=1; $i<18; $i++){   
        if($editForm["f".$i]->getData()>0){
         $suma = $suma + $editForm["f".$i]->getData();
         $tot = $tot + 1;
        }
        }
       $entity->setF0($suma/$tot);
        
        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('docente_coevaldirector'));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
        );
    }
    /**
     * Deletes a coevalDirector entity.
     *
     * @Route("/{id}", name="coevaldirector_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AdminMedBundle:coevalDirector')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find coevalDirector entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('coevaldirector'));
    }

    /**
     * Creates a form to delete a coevalDirector entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('coevaldirector_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
