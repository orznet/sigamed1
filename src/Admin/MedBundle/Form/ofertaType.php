<?php

namespace Admin\MedBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;


class ofertaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
            $builder
            ->add('cedula', 'text', array('required'  => true))
                    
           ->add('periodo', 'choice', array('empty_value' => ' ', 'label' => ' ',    
            'choices'   => array( '16-04' => '16-04', '8-05' => '8-05'), 'required'  => true,))        
            ;           
    }

    public function getName()
    {
        return 'oferta';
    }
}