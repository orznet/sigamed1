<?php

namespace Admin\UnadBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Session\Session;
use Admin\UnadBundle\Entity\Programa;
use Admin\UnadBundle\Form\ProgramaType;

/**
 * Programa controller.
 *
 * @Route("/unad/programa")
 */
class ProgramaController extends Controller
{

    /**
     * Lists all Programa entities.
     *
     * @Route("/", name="programa")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        //$entities = $em->getRepository('AdminUnadBundle:Programa')->findAll();
        if ($this->container->get('security.context')->isGranted('ROLE_SECA')){
        $session = $this->getRequest()->getSession();
       // $escuela = $em->getRepository('AdminUnadBundle:Escuela')->find($session->get('escuelaid'));
       // $entities = $em->getRepository('AdminUnadBundle:Programa')->findBy(array('escuela' => $escuela));   
        $entities = $em->getRepository('AdminUnadBundle:Programa')->getPorEscuela($session->get('escuelaid'));
        
        }
        else{
        $entities = $em->getRepository('AdminUnadBundle:Programa')->ordenEscuela();
        }
        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Programa entity.
     *
     * @Route("/", name="programa_create")
     * @Method("POST")
     * @Template("AdminUnadBundle:Programa:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Programa();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('programa_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a Programa entity.
    *
    * @param Programa $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Programa $entity)
    {
        $form = $this->createForm(new ProgramaType(), $entity, array(
            'action' => $this->generateUrl('programa_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Programa entity.
     *
     * @Route("/new", name="programa_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Programa();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Programa entity.
     *
     * @Route("/{id}", name="programa_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdminUnadBundle:Programa')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Programa entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }
    
     /**
     * Finds and displays a Programa entity.
     * @Route("/{id}/modal", name="programa_modal")
     * @Method("GET")
     * @Template()
     */
    public function modalAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdminUnadBundle:Programa')->find($id);
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Programa entity.');
        }

        return array(
            'entity'      => $entity,
        );
    }

    /**
     * Displays a form to edit an existing Programa entity.
     *
     * @Route("/{id}/edit", name="programa_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdminUnadBundle:Programa')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Programa entity.');
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
    * Creates a form to edit a Programa entity.
    *
    * @param Programa $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Programa $entity)
    {
        $form = $this->createForm(new ProgramaType(), $entity, array(
            'action' => $this->generateUrl('programa_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Programa entity.
     *
     * @Route("/{id}", name="programa_update")
     * @Method("PUT")
     * @Template("AdminUnadBundle:Programa:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdminUnadBundle:Programa')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Programa entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);
        if ($editForm["lider"]->getData() != null){
        $lider = $em->getRepository('AdminUnadBundle:Docente')->find($editForm["lider"]->getData());
        $entity->setLider($lider);  
        }
        if ($editForm->isValid()) {
            $em->flush();
         
            return $this->redirect($this->generateUrl('escuela_info')); 
        
       
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Programa entity.
     *
     * @Route("/{id}", name="programa_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AdminUnadBundle:Programa')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Programa entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('programa'));
    }

    /**
     * Creates a form to delete a Programa entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('programa_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
    
    
    
     /**
     * Seleccionar docente
     * @Route("/add/lider", name="programa_addlider")
     * @Method("GET")
     * @Template()
     */
    public function addliderAction()
    {
       $em = $this->getDoctrine()->getManager();
       $session = new Session();
       $session->migrate();
       $escuela = $em->getRepository('AdminUnadBundle:Escuela')->find($session->get('escuelaid'));
       $entities = $em->getRepository('AdminUnadBundle:Docente')->findBy(array('escuela' => $escuela));
        return array(
        'entities' => $entities,
        );
    }
    
}
