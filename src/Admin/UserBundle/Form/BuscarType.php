<?php

namespace Admin\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;


class BuscarType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
            $builder
            ->add('texto')
            ->add('parametro', 'choice', array(
            'empty_value' => 'Buscar por:',    
            'choices'   => array('ced' => 'Cédula', 'nom' => 'Nombres','apell' => 'Apellidos'),
            'required'  => true,
            ));
            
           
    }

    public function getName()
    {
        return 'buscar';
    }
}