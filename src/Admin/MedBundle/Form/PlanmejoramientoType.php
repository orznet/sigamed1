<?php

namespace Admin\MedBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PlanmejoramientoType extends AbstractType
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
            ->add('observaciones')
            ->add('calificacion')
                 ->add('docente', 'entity', array(
                 'class' =>  'AdminUnadBundle:Docente',
                'property' => 'user.nombres',
                 ))       
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Admin\MedBundle\Entity\Planmejoramiento'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'admin_medbundle_planmejoramiento';
    }
}
