<?php

namespace Admin\UnadBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProgramaType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre', 'text',  array(
            'attr' => array('size' => '100')
            ))
            ->add('nivel', 'choice', array(
            'empty_value' => ' ',    
            'choices'   => array('Diplomado' => 'Diplomado', 'Especialización' => 'Especialización','Licenciatura' => 'Licenciatura', 'Maestria' => 'Maestria','Profesional' => 'Profesional','Tecnologia' => 'Tecnologia','Unidad'=>'Unidad'),
            'required'  => true,
            ))    
                
            ->add('escuela', 'entity', array(
                 'empty_value' => ' ', 
                 'class' =>  'AdminUnadBundle:Escuela',
                'property' => 'nombre',
                 ))        
            ->add("lider", "text", array(
             "mapped" => false,
            'required'  => true,
            'attr' => array('readonly' => 'readonly')    
                ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Admin\UnadBundle\Entity\Programa'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'admin_unadbundle_programa';
    }
}
