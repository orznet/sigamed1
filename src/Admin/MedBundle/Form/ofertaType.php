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
                        
          ->add('periodo', 'entity', array(
          'class' =>  'AdminMedBundle:Periodoa',
          'property' => 'id',
          ))  
        ;  
    }

    public function getName()
    {
        return 'oferta';
    }
}