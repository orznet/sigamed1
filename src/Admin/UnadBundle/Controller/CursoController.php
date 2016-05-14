<?php

namespace Admin\UnadBundle\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Admin\UnadBundle\Entity\Curso;
use Admin\MedBundle\Entity\Oferta;
use Admin\MedBundle\Entity\Cedula;
use Admin\MedBundle\Entity\Tutor;
use Admin\UnadBundle\Form\CursoType;
use Admin\MedBundle\Form\CedulaType;
use Admin\UnadBundle\Form\CursoprogType;

/**
 * Curso controller.
 *
 * @Route("/unad/curso")
 */
class CursoController extends Controller
{

    /**
     * Lists all Curso entities.
     *
     * @Route("/", name="curso")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('AdminUnadBundle:Curso')->findAll();
        return array(
            'entities' => $entities,
        );
    }
    
        /**
     * Lists all Curso entities.
     *
     * @Route("/pe/{sigla}", name="curso_escuela")
     * @Method("GET")
     * @Template("AdminUnadBundle:Curso:index.html.twig")
     * 
     */
    public function porescuelaAction($sigla)
    {
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('AdminUnadBundle:Curso')->findBy(array('escuela' => $sigla));

        return array(
            'entities' => $entities,
        );
    }
    
    
    /**
     * Creates a new Curso entity.
     *
     * @Route("/", name="curso_create")
     * @Method("POST")
     * @Template("AdminUnadBundle:Curso:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Curso();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            return $this->redirect($this->generateUrl('curso_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a Curso entity.
    *
    * @param Curso $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Curso $entity)
    {
        $form = $this->createForm(new CursoType(), $entity, array(
            'action' => $this->generateUrl('curso_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Curso entity.
     *
     * @Route("/new", name="curso_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Curso();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Curso entity
     * @Route("/{id}", name="curso_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdminUnadBundle:Curso')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Curso entity.');
        }

       $deleteForm = $this->createDeleteForm($id);
       $cedula = new Cedula();     
       $Form = $this->createForm(new CedulaType(), $cedula, array(
            'action' => $this->generateUrl('curso_tutor', array('id' => $entity->getId())),
            'method' => 'GET',
        ));
       
       
       $Form->add('submit', 'submit', array('label' => 'Agregar'));

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
            'cedula_form'   => $Form->createView(),     
        );
    }
    
    
     /**
     * Finds and displays a Curso entity
     * @Route("/oferta/{id}", name="oferta_show")
     * @Method("GET")
     * @Template()
     */
    public function ofertaAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdminMedBundle:Oferta')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Oferta entity.');
        }

       $deleteForm = $this->createDeleteForm($id);
       $cedula = new Cedula();     
       $Form = $this->createForm(new CedulaType(), $cedula, array(
            'action' => $this->generateUrl('oferta_tutor', array('id' => $entity->getId())),
            'method' => 'GET',
        ));
       
       
       $Form->add('submit', 'submit', array('label' => 'Agregar'));

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
            'cedula_form'   => $Form->createView(),     
        );
    }
    
    
   /**
     * Finds and displays a Curso entity
     * @Route("/{id}/tutor", name="oferta_tutor")
     * @Method("GET")
     * @Template()
     */
    public function cursoTutorAction(Request $request, $id)
    {
      $em = $this->getDoctrine()->getManager();
      $oferta = $em->getRepository('AdminMedBundle:Oferta')->find($id);
      $cedula = new Cedula();
      $Form = $this->createForm(new CedulaType(), $cedula);
      $Form->bind($request);
      $numeroced = $Form->get('cedula')->getData();
      $session = $this->getRequest()->getSession();
      $securityContext = $this->container->get('security.context');
      
      if($oferta->getDirector()->getId() != $session->get('docenteid') && !$securityContext->isGranted('ROLE_ADMIN')){
      $this->get('session')->getFlashBag()->add('error', 'No permitido');          
      return $this->redirect($this->generateUrl('oferta_show', array('id' => $id)));                     
       }
      
      $usuario = $em->getRepository('AdminUserBundle:User')->find($numeroced);       
       if (!$usuario) {
       $this->get('session')->getFlashBag()->add('error', 'Cédula no encontrada');          
       return $this->redirect($this->generateUrl('oferta_show', array('id' => $id)));          
       }
   
      $docente = $em->getRepository('AdminUnadBundle:Docente')->findOneBy(array('user' => $usuario));
      
      
      if (!$docente) {
      $this->get('session')->getFlashBag()->add('error', 'El número no corresponde a un docente');          
      return $this->redirect($this->generateUrl('oferta_show', array('id' => $id)));          
      }
      
       if($docente->getId() == $oferta->getDirector()->getId()){
       $this->get('session')->getFlashBag()->add('warning', 'No es necesario que el director se agregue como tutor');          
       return $this->redirect($this->generateUrl('oferta_show', array('id' => $id)));      
       }
      
      $tutor = new Tutor();
      $tutor->setOferta($oferta);
      $tutor->setDocente($docente);
      try{
      $em->persist($tutor);
      $em->flush();
       } catch (\Doctrine\DBAL\DBALException $e) {
             $this->get('session')->getFlashBag()->add('warning', 'El docente ya se encuentra en el curso');
             return $this->redirect($this->generateUrl('oferta_show', array('id' => $id)));
       }
       $this->get('session')->getFlashBag()->add('success', 'El docente se agrego al curso'); 
       return $this->redirect($this->generateUrl('oferta_show', array('id' => $id)));
    }
    
    
    
    
     /** en modal
     * @Route("/{id}/modal", name="curso_modal")
     * @Method("GET")
     * @Template()
     */
    public function modalAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('AdminMedBundle:Oferta')->find($id);
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Curso entity.');
        }
        return array(
            'entity'      => $entity,
        );
    }

    /**
     * Displays a form to edit an existing Curso entity.
     *
     * @Route("/{id}/edit", name="curso_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdminUnadBundle:Curso')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Curso entity.');
        }
        
        $editForm = $this->createEditarForm($entity);
        if ($entity->getDirector()){
        $editForm->get('director')->setData($entity->getDirector()->getId());
        }
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
    * Creates a form to edit a Curso entity.
    * @param Curso $entity The entity
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Curso $entity)
    {
        $form = $this->createForm(new CursoType(), $entity, array(
            'action' => $this->generateUrl('curso_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));
        $form->add('submit', 'submit', array('label' => 'Update'));
        return $form;
    }
    
    
    /**
    * Creates a form to edit a Curso entity.
    *
    * @param Curso $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditarForm(Curso $entity)
    {
        $session = $this->getRequest()->getSession();
        $escuelaid = $session->get('escuelaid');
        $form = $this->createForm(new CursoprogType($escuelaid), $entity, array(
            'action' => $this->generateUrl('curso_update', array('id' => $entity->getId())),
            'method' => 'PUT',
             )
             );
        $form->add('submit', 'submit', array('label' => 'Actualizar'));
        return $form;
    
   }
    
    
    /**
     * Edits an existing Curso entity.
     *
     * @Route("/{id}", name="curso_update")
     * @Method("PUT")
     * @Template("AdminUnadBundle:Curso:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdminUnadBundle:Curso')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Curso entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditarForm($entity);
        $editForm->handleRequest($request);
        
        $director = $em->getRepository('AdminUnadBundle:Docente')->find($editForm->get('director')->getData());
        $entity->setDirector($director);
       
        if ($editForm->isValid()){
            $em->flush();

            return $this->redirect($this->generateUrl('curso_escuela', array('sigla' => $entity->getEscuela())));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Curso entity.
     *
     * @Route("/{id}", name="curso_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AdminUnadBundle:Curso')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Curso entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('curso'));
    }

    /**
     * Creates a form to delete a Curso entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('curso_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
    
     /**
     * Borrar Tutor.
     *
     * @Route("/tutor/{id}/del", name="tutor_delete")
     * @Method("GET")
     */
    public function borrartutorAction($id)
    {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AdminMedBundle:Tutor')->find($id);
            $cursoid = $entity->getCurso()->getId();
            $director = $entity->getCurso()->getDirector();
            $securityContext = $this->container->get('security.context');
            $session = $this->getRequest()->getSession();
            
            if($director->getId() == $session->get('docenteid') || $securityContext->isGranted('ROLE_ADMIN')){

                try{
                $em->remove($entity);
                $em->flush();
                } catch (\Doctrine\DBAL\DBALException $e) {
                $this->get('session')->getFlashBag()->add('warning', 'El tutor no se puede remover ya evaluo');
                return $this->redirect($this->generateUrl('curso_show', array('id' => $cursoid)));
                }
                return $this->redirect($this->generateUrl('curso_show', array('id' => $cursoid)));
                } 
                else{
                $this->get('session')->getFlashBag()->add('error', 'No permitido');          
                return $this->redirect($this->generateUrl('curso_show', array('id' => $cursoid)));   
                }
            
        }
            

    
}
