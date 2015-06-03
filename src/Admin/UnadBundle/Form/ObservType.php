<?php

namespace Admin\UnadBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ObservType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
            $builder
          
            ->add('observaciones', 'textarea', array('required'  => true, 'attr' => array('cols' => '120')))         
       ;
    }
    public function getName()
    {
        return 'observaciones';
    }
}