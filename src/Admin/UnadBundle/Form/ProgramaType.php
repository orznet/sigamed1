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
            ->add('nombre')
            ->add('nivel')
            ->add('escuela', 'entity', array(
                 'class' =>  'AdminUnadBundle:Escuela',
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
