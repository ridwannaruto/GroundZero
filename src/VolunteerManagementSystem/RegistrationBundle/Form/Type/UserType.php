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
            ->add('username','text')
            ->add('password','repeated',array(
                'first_name' => 'password',
                'second_name' => 'confirm',
                'type' => 'password',
            ))
            ->add('firstname','text')=
            ->add('lastname','text')
            ->add('email','email')
            ->add('gender','choice',array(
                'choices' => array( 'm' => 'Male', 'f' => 'Female')))
            ->add('phoneNumber','text')
            ->add('dateOfBirth','date',array(
                'input' => 'datetime',
                'widget' => 'choice',
            ))
            ->add('submit', 'submit');
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
