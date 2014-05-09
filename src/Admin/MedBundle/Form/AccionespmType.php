<?php

namespace Admin\MedBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AccionespmType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('plan','entity', array(
            'class' =>  'AdminMedBundle:Planmejoramiento',
            'property' => 'id',
                 ))     
            ->add('oportunidad', 'textarea', array('required'  => true, 'attr' => array('cols' => '45')))
            ->add('causas', 'textarea', array('required'  => true, 'attr' => array('cols' => '45')))
            ->add('accion', 'textarea', array('required'  => true, 'attr' => array('cols' => '45')))
            ->add('fecha_proyectada')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Admin\MedBundle\Entity\Accionespm'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'admin_medbundle_accionespm';
    }
}
