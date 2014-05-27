<?php
namespace Admin\UnadBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CursoprogType extends AbstractType
{
protected $escuelaid;
public function __construct ($escuelaid)
{
    $this->escuelaid = $escuelaid;
}       
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $escuelaid = $this->escuelaid;
        $builder
            ->add('nombre', 'text',  array(
            'attr' => array('size' => '100')
            ))  
            ->add('nivel', 'choice', array(
            'empty_value' => ' ',    
            'choices'   => array('Básico' => 'Básico', 'ELECTIVO' => 'ELECTIVO','Especialización' => 'Especialización', 'Grado' => 'Grado','Posgrado' => 'Posgrado'),
            'required'  => true,
            ))
            ->add('tipologia', 'choice', array(
            'empty_value' => ' ',    
            'choices'   => array('Metodológico' => 'Metodológico', 'Práctico' => 'Práctico','Recontextual' => 'Recontextual', 'Teórico' => 'Teórico','Teórico/Práctico' => 'Teórico/Práctico'),
            'required'  => true,
            ))     
            ->add('creditos')
            ->add('escuela')
            ->add("director", "text", array(
             "mapped" => false,
            'required'  => true,
            'attr' => array('readonly' => 'readonly')    
                ))    
            ->add('programa', 'entity', array(
            'required' => true,
            'empty_value' => ' ', 
            'class' => 'AdminUnadBundle:Programa',
            'property' => 'lista',     
            'query_builder' => function(\Admin\UnadBundle\Entity\ProgramaRepository $er) use ($escuelaid) {
            return $er->createQueryBuilder('c')
            ->where('c.escuela = :escuelaid')
            ->setParameter('escuelaid', $escuelaid);
            }))
                
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Admin\UnadBundle\Entity\Curso'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'admin_unadbundle_curso';
    }
}
