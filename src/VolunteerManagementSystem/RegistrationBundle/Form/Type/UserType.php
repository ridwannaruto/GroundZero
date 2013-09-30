<?php

namespace VolunteerManagementSystem\RegistrationBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use VolunteerManagementSystem\RegistrationBundle\Entity\User;

class UserType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username', 'text', array( 
            'label'  => 'User Name',
                
            'attr'   =>  array(
                'class'   => 'login',
                'placeholder' => "enter a unique user name",
                'newline' => 'true',
                'widget' => 'text',
            
            )));
                
           $builder      
            
            ->add('password','repeated',array(
                'first_name' => 'Password',
                'first_options'=> array (
                    'label'=> 'Password',
                    'attr' => array(
                        'placeholder' => 'enter a password with at least 6 characters'
                    )
                ),
                'second_name' => 'Confirm',
                'second_options' => array(
                    'label' => 'Confirm Password',
                    'attr' => array(
                        'placeholder' => 're-enter your password'
                    )
                ),
                'type' => 'password'
                
                    
                    
                
            ))
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
            ->add('email','email', array( 
            'label'  => 'Email Address',
            'attr'   =>  array(
                'class'   => 'login',
                'placeholder' => "enter your contact email"
                )
                
            ))
       
            ->add('phoneNumber','text', array(
                'label' => 'Contact Number',
                'attr'  => array(
                    'placeholder' => 'enter your mobile number'
                )
            ))                   
             ->add('gender','choice',array(
                'choices' => array( 'm' => 'Male', 'f' => 'Female')))
                   
            ->add('dateOfBirth','date',array(
                'input' => 'datetime',
                'widget' => 'single_text',
            ));
           $builder
                
            ->add('submit','submit', array(
                'label' => 'Register',
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
