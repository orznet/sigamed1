<?php

namespace Admin\MedBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Admin\MedBundle\Entity\Avalplang;
use Admin\MedBundle\Form\AvalplangType;

/**
 * Avalplang controller.
 *
 * @Route("/avales")
 */
class AvalplangController extends Controller
{

    /**
     * Lists all Avalplang entities.
     *
     * @Route("/", name="avalplang")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        
        $user = $this->get('security.context')->getToken()->getUser();

        $entities = $em->getRepository('AdminMedBundle:Avalplang')->findby(array('user' => $user));

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Avalplang entity.
     *
     * @Route("/", name="avalplang_create")
     * @Method("POST")
     * @Template("AdminMedBundle:Avalplang:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Avalplang();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('avalplang_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a Avalplang entity.
    *
    * @param Avalplang $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Avalplang $entity)
    {
        $form = $this->createForm(new AvalplangType(), $entity, array(
            'action' => $this->generateUrl('avalplang_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Avalplang entity.
     *
     * @Route("/new", name="avalplang_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Avalplang();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Avalplang entity.
     *
     * @Route("/{id}", name="avalplang_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdminMedBundle:Avalplang')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Avalplang entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Avalplang entity.
     *
     * @Route("/{id}/edit", name="avalplang_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdminMedBundle:Avalplang')->find($id);
        
        $texto =  explode('\n', $entity->getObservaciones());

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Avalplang entity.');
        }
        $editForm = $this->createEditForm($entity);

        return array(
            'entity'      => $entity,
            'texto'       => $texto,
            'edit_form'   => $editForm->createView(),
        );
    }

    /**
    * Creates a form to edit a Avalplang entity.
    *
    * @param Avalplang $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Avalplang $entity)
    {
        $form = $this->createForm(new AvalplangType(), $entity, array(
            'action' => $this->generateUrl('avalplang_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Avalplang entity.
     *
     * @Route("/{id}", name="avalplang_update")
     * @Method("PUT")
     * @Template("AdminMedBundle:Avalplang:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdminMedBundle:Avalplang')->find($id);
        $plan = $entity->getPlan();

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Avalplang entity.');
        }
        
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);
        
        if ($entity->getObservaciones() != null){    
       $date = (new \DateTime());
        $texto = $entity->getObservaciones(). '|' .$date->format('Y-m-d H:i').' - '.$editForm->get('observaciones')->getData();
        } 
       else {
       $date = (new \DateTime());
       $texto = $date->format('Y-m-d H:i').' - '.$editForm->get('observaciones')->getData();   
       }

        $entity->setObservaciones($texto);
        if ($editForm->get('avalado')->getData() == 1){
        $entity->setFechaAval(new \DateTime());   
        }
        if ($editForm->get('avalado')->getData() == 2){
        $plan->setEstado(0);
        #$this->enviarMail($entity);
        }
        
        if ($editForm->isValid()) {  
            
            $em->flush();

            return $this->redirect($this->generateUrl('avalplang'));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
        );
    }
    /**
     * Deletes a Avalplang entity.
     *
     * @Route("/{id}", name="avalplang_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AdminMedBundle:Avalplang')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Avalplang entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('avalplang'));
    }

    /**
     * Creates a form to delete a Avalplang entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('avalplang_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
    
    public function enviarMail(\Admin\MedBundle\Entity\Avalplang $aval){
        
            $docente = $aval->getPlan()->getId();
            $message = \Swift_Message::newInstance()
            ->setSubject('Plan de Gestión '.$docente->getUser()->getId().'-'.$docente->getPeriodo())
            ->setFrom(array('siga@unad.edu.co' => 'Módulo de Evaluación Docente MED'))
            ->setTo(array($docente->getUser()->getEmail() => $docente->getUser()->getNombres().' '.$docente->getUser()->getApellidos()))
            ->setBody(
            $this->renderView('AdminMedBundle:Avalplang:noaprobado.txt.twig',
            array('aval' => $aval)
            )
            )
            ;
            $this->get('mailer')->send($message);
    }

    
}
