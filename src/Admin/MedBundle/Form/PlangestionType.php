<?php

namespace Admin\MedBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PlangestionType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('fecha_creacion')
            ->add('fecha_cierre')
            ->add('fecha_autoevaluacion')
            ->add('observaciones')
            ->add('autoevaluacion')
            ->add('estado')
            ->add('id')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Admin\MedBundle\Entity\Plangestion'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'admin_medbundle_plangestion';
    }
}
