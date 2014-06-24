<?php

namespace Admin\MedBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class redTutoresType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
       $builder
            ->add('f1', 'choice', array('empty_value' => ' ','label' => ' ',    
            'choices'   => array( '5' => 'Siempre', '4' => 'Casi Siempre', '3' => 'Aveces', '2' => 'Casi Nunca', '1' => 'Nunca'), 'required'  => true,))
            ->add('f2', 'choice', array('empty_value' => ' ','label' => ' ',    
            'choices'   => array( '5' => 'Siempre', '4' => 'Casi Siempre', '3' => 'Aveces', '2' => 'Casi Nunca', '1' => 'Nunca'), 'required'  => true,))
            ->add('f3', 'choice', array('empty_value' => ' ','label' => ' ',    
            'choices'   => array( '5' => 'Siempre', '4' => 'Casi Siempre', '3' => 'Aveces', '2' => 'Casi Nunca', '1' => 'Nunca'), 'required'  => true,))
            ->add('f4', 'choice', array('empty_value' => ' ','label' => ' ',    
            'choices'   => array( '5' => 'Siempre', '4' => 'Casi Siempre', '3' => 'Aveces', '2' => 'Casi Nunca', '1' => 'Nunca'), 'required'  => true,))         
            ->add('f5', 'choice', array('empty_value' => ' ','label' => ' ',    
            'choices'   => array( '5' => 'Siempre', '4' => 'Casi Siempre', '3' => 'Aveces', '2' => 'Casi Nunca', '1' => 'Nunca'), 'required'  => true,))
            ->add('f6', 'choice', array('empty_value' => ' ','label' => ' ',    
            'choices'   => array( '5' => 'Siempre', '4' => 'Casi Siempre', '3' => 'Aveces', '2' => 'Casi Nunca', '1' => 'Nunca'), 'required'  => true,))
            ->add('f7', 'choice', array('empty_value' => ' ','label' => ' ',    
            'choices'   => array( '5' => 'Siempre', '4' => 'Casi Siempre', '3' => 'Aveces', '2' => 'Casi Nunca', '1' => 'Nunca'), 'required'  => true,))
            ->add('f8', 'choice', array('empty_value' => ' ','label' => ' ',    
            'choices'   => array( '5' => 'Siempre', '4' => 'Casi Siempre', '3' => 'Aveces', '2' => 'Casi Nunca', '1' => 'Nunca'), 'required'  => true,))
            ->add('f9', 'choice', array('empty_value' => ' ','label' => ' ',    
            'choices'   => array( '5' => 'Siempre', '4' => 'Casi Siempre', '3' => 'Aveces', '2' => 'Casi Nunca', '1' => 'Nunca'), 'required'  => true,))
            ->add('f10', 'choice', array('empty_value' => ' ','label' => ' ',    
            'choices'   => array( '5' => 'Siempre', '4' => 'Casi Siempre', '3' => 'Aveces', '2' => 'Casi Nunca', '1' => 'Nunca'), 'required'  => true,))         
            ->add('f11', 'choice', array('empty_value' => ' ','label' => ' ',    
            'choices'   => array( '5' => 'Siempre', '4' => 'Casi Siempre', '3' => 'Aveces', '2' => 'Casi Nunca', '1' => 'Nunca'), 'required'  => true,))
            ->add('f12', 'choice', array('empty_value' => ' ','label' => ' ',    
            'choices'   => array( '5' => 'Siempre', '4' => 'Casi Siempre', '3' => 'Aveces', '2' => 'Casi Nunca', '1' => 'Nunca'), 'required'  => true,))
            ->add('f13', 'choice', array('empty_value' => ' ','label' => ' ',    
            'choices'   => array( '5' => 'Siempre', '4' => 'Casi Siempre', '3' => 'Aveces', '2' => 'Casi Nunca', '1' => 'Nunca'), 'required'  => true,))
            ->add('f14', 'choice', array('empty_value' => ' ','label' => ' ',    
            'choices'   => array( '5' => 'Siempre', '4' => 'Casi Siempre', '3' => 'Aveces', '2' => 'Casi Nunca', '1' => 'Nunca'), 'required'  => true,))
            ->add('f15', 'choice', array('empty_value' => ' ','label' => ' ',    
            'choices'   => array( '5' => 'Siempre', '4' => 'Casi Siempre', '3' => 'Aveces', '2' => 'Casi Nunca', '1' => 'Nunca'), 'required'  => true,))
            ->add('f16', 'choice', array('empty_value' => ' ','label' => ' ',    
            'choices'   => array( '5' => 'Siempre', '4' => 'Casi Siempre', '3' => 'Aveces', '2' => 'Casi Nunca', '1' => 'Nunca'), 'required'  => true,))         
            ->add('f17', 'choice', array('empty_value' => ' ','label' => ' ',    
            'choices'   => array( '5' => 'Siempre', '4' => 'Casi Siempre', '3' => 'Aveces', '2' => 'Casi Nunca', '1' => 'Nunca'), 'required'  => true,))
            ->add('f18', 'choice', array('empty_value' => ' ','label' => ' ',    
            'choices'   => array( '5' => 'Siempre', '4' => 'Casi Siempre', '3' => 'Aveces', '2' => 'Casi Nunca', '1' => 'Nunca'), 'required'  => true,))
            ->add('f19', 'choice', array('empty_value' => ' ','label' => ' ',    
            'choices'   => array( '5' => 'Siempre', '4' => 'Casi Siempre', '3' => 'Aveces', '2' => 'Casi Nunca', '1' => 'Nunca'), 'required'  => true,))
            ->add('f20', 'choice', array('empty_value' => ' ','label' => ' ',    
            'choices'   => array( '5' => 'Siempre', '4' => 'Casi Siempre', '3' => 'Aveces', '2' => 'Casi Nunca', '1' => 'Nunca'), 'required'  => true,))
            ->add('f21', 'choice', array('empty_value' => ' ','label' => ' ',    
            'choices'   => array( '5' => 'Siempre', '4' => 'Casi Siempre', '3' => 'Aveces', '2' => 'Casi Nunca', '1' => 'Nunca'), 'required'  => true,))
            ->add('f22', 'choice', array('empty_value' => ' ','label' => ' ',    
            'choices'   => array( '5' => 'Siempre', '4' => 'Casi Siempre', '3' => 'Aveces', '2' => 'Casi Nunca', '1' => 'Nunca'), 'required'  => true,))         
            ->add('f23', 'choice', array('empty_value' => ' ','label' => ' ',    
            'choices'   => array( '5' => 'Siempre', '4' => 'Casi Siempre', '3' => 'Aveces', '2' => 'Casi Nunca', '1' => 'Nunca'), 'required'  => true,))
            ->add('f24', 'choice', array('empty_value' => ' ','label' => ' ',    
            'choices'   => array( '5' => 'Siempre', '4' => 'Casi Siempre', '3' => 'Aveces', '2' => 'Casi Nunca', '1' => 'Nunca'), 'required'  => true,))
            ->add('f25', 'choice', array('empty_value' => ' ','label' => ' ',    
            'choices'   => array( '5' => 'Siempre', '4' => 'Casi Siempre', '3' => 'Aveces', '2' => 'Casi Nunca', '1' => 'Nunca'), 'required'  => true,))
            ->add('f26', 'choice', array('empty_value' => ' ','label' => ' ',    
            'choices'   => array( '5' => 'Siempre', '4' => 'Casi Siempre', '3' => 'Aveces', '2' => 'Casi Nunca', '1' => 'Nunca'), 'required'  => true,))
            ->add('f27', 'choice', array('empty_value' => ' ','label' => ' ',    
            'choices'   => array( '5' => 'Siempre', '4' => 'Casi Siempre', '3' => 'Aveces', '2' => 'Casi Nunca', '1' => 'Nunca'), 'required'  => true,))
            ->add('f28', 'choice', array('empty_value' => ' ','label' => ' ',    
            'choices'   => array( '5' => 'Siempre', '4' => 'Casi Siempre', '3' => 'Aveces', '2' => 'Casi Nunca', '1' => 'Nunca'), 'required'  => true,))         
            ->add('f29', 'choice', array('empty_value' => ' ','label' => ' ',    
            'choices'   => array( '5' => 'Siempre', '4' => 'Casi Siempre', '3' => 'Aveces', '2' => 'Casi Nunca', '1' => 'Nunca'), 'required'  => true,))
            ->add('f30', 'choice', array('empty_value' => ' ','label' => ' ',    
            'choices'   => array( '5' => 'Siempre', '4' => 'Casi Siempre', '3' => 'Aveces', '2' => 'Casi Nunca', '1' => 'Nunca'), 'required'  => true,))
            ->add('observaciones', 'textarea', array('required'  => true, 'attr' => array('cols' => '90')))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Admin\MedBundle\Entity\redTutores'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'admin_medbundle_redtutores';
    }
}
