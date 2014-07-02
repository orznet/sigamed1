<?php

namespace Admin\MedBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Admin\MedBundle\Entity\coevalPares;
use Admin\MedBundle\Form\coevalParesType;

/**
 * coevalPares controller.
 *
 * @Route("/coevalpares")
 */
class coevalParesController extends Controller
{

    /**
     * Lists all coevalPares entities.
     *
     * @Route("/", name="coevalpares")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AdminMedBundle:coevalPares')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new coevalPares entity.
     *
     * @Route("/", name="coevalpares_create")
     * @Method("POST")
     * @Template("AdminMedBundle:coevalPares:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new coevalPares();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('coevalpares_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a coevalPares entity.
    *
    * @param coevalPares $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(coevalPares $entity)
    {
        $form = $this->createForm(new coevalParesType(), $entity, array(
            'action' => $this->generateUrl('coevalpares_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new coevalPares entity.
     *
     * @Route("/new", name="coevalpares_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new coevalPares();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a coevalPares entity.
     *
     * @Route("/{id}", name="coevalpares_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdminMedBundle:coevalPares')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find coevalPares entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing coevalPares entity.
     *
     * @Route("/{id}/edit", name="coevalpares_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdminMedBundle:coevalPares')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find coevalPares entity.');
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
    * Creates a form to edit a coevalPares entity.
    *
    * @param coevalPares $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(coevalPares $entity)
    {
        $form = $this->createForm(new coevalParesType(), $entity, array(
            'action' => $this->generateUrl('coevalpares_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing coevalPares entity.
     *
     * @Route("/{id}", name="coevalpares_update")
     * @Method("PUT")
     * @Template("AdminMedBundle:coevalPares:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdminMedBundle:coevalPares')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find coevalPares entity.');
        }

        //$deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);
        
        $entity->setFecha(new \DateTime());
        $suma = 0; $tot = 0;
        for($i=1; $i<31; $i++){   
        if($editForm["f".$i]->getData()>0){
         $suma = $suma + $editForm["f".$i]->getData();
         $tot = $tot + 1;
        }
        }
       $entity->setF0($suma/$tot);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('docente_coevalpares'));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
           // 'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a coevalPares entity.
     *
     * @Route("/{id}", name="coevalpares_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AdminMedBundle:coevalPares')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find coevalPares entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('coevalpares'));
    }

    /**
     * Creates a form to delete a coevalPares entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('coevalpares_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
