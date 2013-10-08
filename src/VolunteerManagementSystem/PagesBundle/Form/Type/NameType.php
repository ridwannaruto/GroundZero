<?php

namespace VolunteerManagementSystem\pagesBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use VolunteerManagementSystem\RegistrationBundle\Entity\User;

class NameType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        
                
           $builder      
            
            
            ->add('firstname','text', array( 
            'label'  => 'First Name',
            'attr'   =>  array(
                'class'   => 'login',
                'placeholder' => "enter your first name")
            ))
            ->add('lastname','text', array( 
            'label'  => 'Last Name',
            'attr'   =>  array(
                'class'   => 'login',
                'placeholder' => "enter your last name"
                )
            ))
            ->add('namewithinitials','text', array( 
            'label'  => 'Name with Initials',
            'attr'   =>  array(
                'class'   => 'login',
                'placeholder' => "enter your name with the initials"
                )
            ));
           $builder
                
            ->add('submit','submit', array(
                'label' => 'Save Name',
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
            'data_class' => 'VolunteerManagementSystem\RegistrationBundle\Entity\User'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'volunteermanagementsystem_registrationbundle_user';
    }
}
