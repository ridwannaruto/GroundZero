<?php

namespace VolunteerManagementSystem\WorkshopBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class WorkshopType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('workshopname', 'text', array( 
            'label'  => 'Workshop Name',
                
            'attr'   =>  array(
                'class'   => 'login',
                'placeholder' => "enter workshop name",
                'newline' => 'true',
                'widget' => 'text',
                
            
            )));
                
           $builder      
            
            ->add('description','text', array( 
            'label'  => 'Description',
            'attr'   =>  array(
                'class'   => 'login',
                'placeholder' => "enter description")
            ))
            ->add('registeredlist','hidden', array( 
            'label'  => 'Registered List',
            'attr'   =>  array(
                'class'   => 'login',
                'data' => 'null'
                )
            ))
            ->add('selectedlist','hidden', array( 
            'label'  => 'Selected List',
            'attr'   =>  array(
                'class'   => 'login',
                'data' => 'null'
                )
            ))
            ->add('capacity','integer', array( 
            'label'  => 'Capacity',
            'attr'   =>  array(
                'class'   => 'login',
                'placeholder' => "enter capacity"
                )
            ))                       
            ->add('date','date',array(
                'input' => 'datetime',
                'widget' => 'single_text',
            ))
            ->add('registrationdeadline','date',array(
                'input' => 'datetime',
                'widget' => 'single_text',
            ));
           $builder
                
            ->add('submit','submit', array(
                'label' => 'Create Workshop',
                'attr' => array(
                    'class' => 'button'
                )
                
            ));
        ;
        
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'VolunteerManagementSystem\WorkshopBundle\Entity\Workshop'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'volunteermanagementsystem_workshopbundle_workshop';
    }
}

?>
