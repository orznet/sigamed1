<?php

namespace Admin\UnadBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Admin\UnadBundle\Entity\Escuela;
use Admin\UnadBundle\Form\EscuelaType;

/**
 * Escuela controller.
 *
 * @Route("/unad/escuela")
 */
class EscuelaController extends Controller
{

    /**
     * Lists all Escuela entities.
     *
     * @Route("/", name="escuela")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AdminUnadBundle:Escuela')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Escuela entity.
     *
     * @Route("/", name="escuela_create")
     * @Method("POST")
     * @Template("AdminUnadBundle:Escuela:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Escuela();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);
 
        $em = $this->getDoctrine()->getManager();
        $decano = $em->getRepository('AdminUserBundle:User')->find($form["decano"]->getData());
        $entity->setDecano($decano);
        $secretaria = $em->getRepository('AdminUserBundle:User')->find($form["secretaria"]->getData());
        $entity->setSecretaria($secretaria);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('escuela_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a Escuela entity.
    *
    * @param Escuela $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Escuela $entity)
    {
        $form = $this->createForm(new EscuelaType(), $entity, array(
            'action' => $this->generateUrl('escuela_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Escuela entity.
     *
     * @Route("/new", name="escuela_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Escuela();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Escuela entity.
     *
     * @Route("/{id}", name="escuela_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdminUnadBundle:Escuela')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Escuela entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }
    
     /**
     * Finds and displays a Escuela entity.
     *
     * @Route("/info/info", name="escuela_info")
     * @Method("GET")
     * @Template()
     */
    public function infoAction()
    {
        $em = $this->getDoctrine()->getManager();
        $session = $this->getRequest()->getSession();
        $escuela = $em->getRepository('AdminUnadBundle:Escuela')->find($session->get('escuelaid'));
        if (!$escuela) {
            throw $this->createNotFoundException('Unable to find Escuela entity.');
        }
        return array(
        'entity'      => $escuela,
        );
    }
    
    /**
     * Displays a form to edit an existing Escuela entity.
     *
     * @Route("/{id}/edit", name="escuela_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdminUnadBundle:Escuela')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Escuela entity.');
        }

        $editForm = $this->createEditForm($entity);
        $editForm["decano"]->setData($entity->getDecano()->getId());
        $editForm["secretaria"]->setData($entity->getSecretaria()->getId());
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
    * Creates a form to edit a Escuela entity.
    *
    * @param Escuela $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Escuela $entity)
    {
        $form = $this->createForm(new EscuelaType(), $entity, array(
            'action' => $this->generateUrl('escuela_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Escuela entity.
     *
     * @Route("/{id}", name="escuela_update")
     * @Method("PUT")
     * @Template("AdminUnadBundle:Escuela:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdminUnadBundle:Escuela')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Escuela entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);
        
        $decano = $em->getRepository('AdminUserBundle:User')->find($editForm["decano"]->getData());
        $entity->setDecano($decano);
        $secretaria = $em->getRepository('AdminUserBundle:User')->find($editForm["secretaria"]->getData());
        $entity->setSecretaria($secretaria);
        
        if ($editForm->isValid() && $secretaria && $decano) {
            $em->flush();

            return $this->redirect($this->generateUrl('escuela_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Escuela entity.
     *
     * @Route("/{id}", name="escuela_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AdminUnadBundle:Escuela')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Escuela entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('escuela'));
    }

    /**
     * Creates a form to delete a Escuela entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('escuela_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
