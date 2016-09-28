<?php

namespace Admin\UserBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Admin\UserBundle\Entity\Parabuscar;
use Admin\UserBundle\Entity\User;
use Admin\UserBundle\Form\UserType;
use Admin\UserBundle\Form\BuscarType;
use Admin\MedBundle\Entity\Archivo;

/**
 * User controller.
 *
 * @Route("/unad/user")
 */
class UserController extends Controller
{
     /**
     * Lists all Usuarios entities.
     * @Route("/", name="admin_user")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
       $em = $this->getDoctrine()->getManager();
     //  $entities = $em->getRepository('AdminUserBundle:User')->findAll(array ($orderBy = null, $maxResults = 500, $firstResult = null));
       
        $dql = "select a from AdminUserBundle:User a";
        $query = $em->createQuery($dql);
        $query->setMaxResults(50);
        $entities = $query->getResult();
        
       $valores = new Parabuscar();     
       $Form = $this->createForm(new BuscarType(), $valores);
       // $entities = $em->getRepository('AdminUserBundle:User')->findAll();

        return $this->render('AdminUserBundle:User:index.html.twig', array(
            'entities' => $entities,
            'buscar_form'   => $Form->createView(),     
        ));
    }
    
     /**
     * Lists all Usuarios entities.
     * @Method("GET")
     * @Template()
     */
    public function infoAction()
    {
    return $this->render('AdminUserBundle:User:info.html.twig');       
    }
    
    
     /**
     * Lists all Usuarios entities.
     * @Route("/", name="admin_user_buscarpor")
     * @Method("PUT")
     * @Template()
     */
    public function buscarporAction(Request $request)
    {
    $valores = new Parabuscar();
    $Form = $this->createForm(new BuscarType(), $valores);
    $Form->bind($request);
    $cadena = $valores->getTexto();
    //$cadena = $Form->get('texto')->getData();
    //$param = $Form->get('parametro')->getData();
    $param = $valores->getParametro();
    
    if ($param == 'ced'){
    //return $this->redirect($this->generateUrl('admin_user_cedula', array('text' => $cadena)));
    return $this->buscarcedulaAction($cadena);
    }
    else if ($param == 'nom'){
    //return $this->redirect($this->generateUrl('admin_user_nombres', array('text' => $cadena)));
    return $this->buscarnombreAction($cadena);
    }
    else if ($param == 'apell'){
    return $this->buscarapellidoAction($cadena);
    //return $this->redirect($this->generateUrl('admin_user_apellidos', array('text' => $cadena)));
    }
    return $this->redirect($this->generateUrl('_welcome'));
    }
 
    
   public function buscarapellidoAction($text)
    {             
    $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery('SELECT a FROM AdminUserBundle:User a WHERE a.apellidos LIKE :text ');
        $query->setParameters(array(
        'text' => '%'.$text.'%',
        ));       
        $docentes =  $query->getResult();
         $valores = new Parabuscar();     
       $Form = $this->createForm(new BuscarType(), $valores);
        return $this->render('AdminUserBundle:User:index.html.twig', array(
            'entities' => $docentes,
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
        $valores = new Parabuscar();     
       $Form = $this->createForm(new BuscarType(), $valores);
        return $this->render('AdminUserBundle:User:index.html.twig', array(
            'entities' => $docentes,
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
        $valores = new Parabuscar();     
       $Form = $this->createForm(new BuscarType(), $valores);
        return $this->render('AdminUserBundle:User:index.html.twig', array(
            'entities' => $docentes,
            'buscar_form' => $Form->createView(),
        ));
    }
    
    
     /**
     * Lists all Usuarios entities.
     * @Route("/create", name="admin_user_create")
     * @Method("POST")
     * @Template()
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
     * Lists all Usuarios entities.
     * @Route("/new", name="admin_user_new")
     * @Method("GET")
     * @Template()
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
     * Lists all Usuarios entities.
     * @Route("/{id}/doc", name="admin_user_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();
       

        $archivo = $em->getRepository('AdminMedBundle:Archivo')->findBy(array('cedula' => $id));

        $entity = $em->getRepository('AdminUserBundle:User')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find User entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AdminUserBundle:User:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(), 
            'archivo'      => $archivo,
            ));
    }

     /**
     * Lists all Usuarios entities.
     * @Route("/{id}/edit", name="admin_user_edit")
     * @Method("GET")
     * @Template()
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
     * Lists all Usuarios entities.
     * @Route("/{id}/update", name="admin_user_update")
     * @Method("PUT")
     * @Template()
     */
    
public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('AdminUserBundle:User')->find($id);
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find User entity.');
        }
        $editForm = $this->createForm(new UserType(), $entity);
        $currentpass = $entity->getPassword();
        $editForm->bind($request);
            
        if ($editForm->isValid()) {
               if ($editForm->get('password')->getData() != $currentpass) {
               $this->setSecurePassword($entity);
               }
             $em->persist($entity);
             $em->flush(); 
            return $this->redirect($this->generateUrl('admin_user_edit', array('id' => $id)));
        }
    }

     /**
     * Lists all Usuarios entities.
     * @Route("/{id}/delete", name="admin_user_delete")
     * @Method("DELETE")
     * @Template()
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
