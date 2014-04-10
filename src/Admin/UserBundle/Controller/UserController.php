<?php

namespace Admin\UserBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Admin\UserBundle\Entity\Parabuscar;
use Admin\UserBundle\Entity\User;
use Admin\UserBundle\Form\UserType;
use Admin\UserBundle\Form\BuscarType;

/**
 * User controller.
 *
 */
class UserController extends Controller
{
    /**
     * Lists all User entities.
     *
     */
    public function indexAction()
    {
       // $em = $this->getDoctrine()->getManager();
        
        $em = $this->getDoctrine()->getManager();
        $dql = "select a from AdminUserBundle:User a";
        $query = $em->createQuery($dql);
        $query->setMaxResults(300);
        $entities = $query->getResult();
        $total = count($entities);
        
       $valores = new Parabuscar();     
       $Form = $this->createForm(new BuscarType(), $valores);
       // $entities = $em->getRepository('AdminUserBundle:User')->findAll();

        return $this->render('AdminUserBundle:User:index.html.twig', array(
            'entities' => $entities,
            'totale' => $total,
            'buscar_form'   => $Form->createView(),     
        ));
    }

    public function buscarporAction(Request $request)
    {
    $valores = new Parabuscar();
    $Form = $this->createForm(new BuscarType(), $valores);
    $Form->bind($request);
    $cadena = $Form->get('texto')->getData();
    $param = $Form->get('parametro')->getData();
    
    if ($param == 'ced'){
    return $this->redirect($this->generateUrl('admin_user_cedula', array('text' => $cadena)));
    }
    else if ($param == 'nom'){
    return $this->redirect($this->generateUrl('admin_user_nombres', array('text' => $cadena)));
    }
    else if ($param == 'apell'){
    return $this->redirect($this->generateUrl('admin_user_apellidos', array('text' => $cadena)));
    }
    return $this->redirect($this->generateUrl('admin_docente_buscar'));
    }
   public function buscarapellidoAction($text)
    {             
    $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery('SELECT a FROM AdminUserBundle:User a WHERE a.apellidos LIKE :text ');
        $query->setParameters(array(
        'text' => '%'.$text.'%',
        ));
        
        $docentes =  $query->getResult();
        $total = count($docentes);
         $valores = new Parabuscar();     
       $Form = $this->createForm(new BuscarType(), $valores);
        return $this->render('AdminUserBundle:User:index.html.twig', array(
            'entities' => $docentes,
            'totale'  => $total,
            'buscar_form' => $Form->createView(),
        ));
    }
    
   public function buscarnombreAction($text)
    {             
    $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery('SELECT a FROM AdminUserBundle:User a WHERE a.nombres LIKE :text');
        $query->setParameters(array(
        'text' => '%'.$text.'%',
        ));
        $docentes =  $query->getResult();
        $total = count($docentes);
        $valores = new Parabuscar();     
       $Form = $this->createForm(new BuscarType(), $valores);
        return $this->render('AdminUserBundle:User:index.html.twig', array(
            'entities' => $docentes,
            'totale'  => $total,
            'buscar_form' => $Form->createView(),
        ));
    }
    
     public function buscarcedulaAction($text)
    {             
    $em = $this->getDoctrine()->getManager();   
       $query = $em->createQuery('SELECT a FROM AdminUserBundle:User a WHERE a.id LIKE :text');
        $query->setParameters(array(
        'text' => $text,
        ));
        $docentes =  $query->getResult();
        $total = count($docentes);
        $valores = new Parabuscar();     
       $Form = $this->createForm(new BuscarType(), $valores);
        return $this->render('AdminUserBundle:User:index.html.twig', array(
            'entities' => $docentes,
            'totale'  => $total,
            'buscar_form' => $Form->createView(),
        ));
    }
    
    
    /**
     * Creates a new User entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new User();
        $form = $this->createForm(new UserType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $this->setSecurePassword($entity);
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_user_show', array('id' => $entity->getId())));
        }

        return $this->render('AdminUserBundle:User:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new User entity.
     *
     */
    public function newAction()
    {
        $entity = new User();
        $form   = $this->createForm(new UserType(), $entity);

        return $this->render('AdminUserBundle:User:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a User entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdminUserBundle:User')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find User entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AdminUserBundle:User:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing User entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdminUserBundle:User')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find User entity.');
        }

        $editForm = $this->createForm(new UserType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AdminUserBundle:User:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing User entity.
     *
     */
public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdminUserBundle:User')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find User entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new UserType(), $entity);
        $current_pass = $entity->getPassword();
        $editForm->bind($request);
        if ($editForm->isValid()) {
               if ($current_pass != $entity->getPassword()) {
                $this->setSecurePassword($entity);
            }           
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_user_edit', array('id' => $id)));
        }

        return $this->render('AdminUserBundle:User:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a User entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AdminUserBundle:User')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find User entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('admin_user'));
    }

    /**
     * Creates a form to delete a User entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
   private function setSecurePassword(&$entity) {
	$entity->setSalt(md5(time()));
	$encoder = new \Symfony\Component\Security\Core\Encoder\MessageDigestPasswordEncoder('sha512', true, 10);
	$password = $encoder->encodePassword($entity->getPassword(), $entity->getSalt());
	$entity->setPassword($password);
}
    
}
