<?php

namespace Admin\UnadBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CentroType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('tipo', 'choice', array(
            'empty_value' => ' ',    
            'choices'   => array('Nodo' => 'Nodo', 'CEAD' => 'CEAD','CERES' => 'CERES', 'CCAV' => 'CCAV','UDR' => 'UDR'),
            'required'  => true,
            ))
            ->add('zona', 'entity', array(
                 'class' =>  'AdminUnadBundle:Zona',
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
            'data_class' => 'Admin\UnadBundle\Entity\Centro'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'admin_unadbundle_centro';
    }
}
