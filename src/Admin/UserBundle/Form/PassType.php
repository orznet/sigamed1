<?php

namespace Admin\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class PassType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add("username", "text", array(
            'required'  => true,    
            ))     
            ->add("email", "text", array(
            'required'  => true,    
            ))  
            ->add('vinculacion', 'choice', array(
            'empty_value' => 'Vinculación:',    
            'choices'   => array('Ocasional' => 'Ocasional', 'Hora Catedra' => 'Hora Catedra','De Carrera' => 'De Carrera', 'DOFE' => 'DOFE'),
            'required'  => true,
            ))
            ->add('unidad', 'choice', array(
            'empty_value' => 'Escuela/Unidad:',    
            'choices'   => array('ECACEN'=>'ECACEN', 'ECISALUD'=>'ECISALUD','ECBTI' => 'ECBTI', 'ECAPMA' => 'ECAPMA', 'ECSAH' => 'ECSAH', 'ECEDU' => 'ECEDU', 'ECPOL' => 'ECPOL', 'VIMMEP' => 'VIMMEP', 'VIACI' => 'VIACI', 'INVIL' => 'INVIL', 'VIDER' => 'VIDER','VISAE' => 'VISAE', 'VIREL' => 'VIREL' ),
            'required'  => true,
            ));     }

    public function getName()
    {
        return 'admin_userbundle_passtype';
    }
}

