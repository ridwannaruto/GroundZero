<?php

namespace VolunteerManagementSystem\PagesBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use VolunteerManagementSystem\RegistrationBundle\Entity\User;

class PasswordType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
                
           $builder      
            
            ->add('password','repeated',array(
                'first_name' => 'Password',
                'first_options'=> array (
                    'label'=> 'Enter New Password',
                    'attr' => array(
                        'placeholder' => 'enter a password with at least 6 characters'
                    )
                ),
                'second_name' => 'Confirm',
                'second_options' => array(
                    'label' => 'Re-Enter  Password',
                    'attr' => array(
                        'placeholder' => 're-enter your password'
                    )
                ),
                'type' => 'password'
                ));
           $builder
                
            ->add('submit','submit', array(
                'label' => 'Save password',
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
