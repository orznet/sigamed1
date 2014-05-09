<?php

namespace Admin\UnadBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class DocenteType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('modalidad', 'choice', array(  
            'choices'   => array('TC' => 'Tiempo Completo', 'MT' => 'Medio Tiempo'),
            'required'  => true,
            ))
            ->add('vinculacion', 'choice', array(  
            'choices'   => array('HC' => 'Hora Catedra', 'DO' => 'Ocasional','DC' => 'Carrera' ),
            'required'  => true,
            ))    
            ->add('cargo')
            ->add('resolucion')
            ->add('perfil')  
            ->add('escuela', 'entity', array(
                 'class' =>  'AdminUnadBundle:Escuela',
                'property' => 'sigla',
                 ))       
            ->add('centro', 'entity', array(
                 'class' =>  'AdminUnadBundle:Centro',
                'property' => 'nombre',
                 ))      
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Admin\UnadBundle\Entity\Docente'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'admin_unadbundle_docente';
    }
}
