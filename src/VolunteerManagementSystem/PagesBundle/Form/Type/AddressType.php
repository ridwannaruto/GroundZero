<?php

namespace VolunteerManagementSystem\PagesBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use VolunteerManagementSystem\RegistrationBundle\Entity\User;

class AddressType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                   ->add('address','text', array( 
            'label'  => 'Address',
            'attr'   =>  array(
                'class'   => 'login',
                'placeholder' => "enter your address"
                )
            ))
                    ->add('city','text', array( 
            'label'  => 'City',
            'attr'   =>  array(
                'class'   => 'login',
                'placeholder' => "enter your city"
                )
            ))
                ->add('country','text', array( 
            'label'  => 'Country',
            'attr'   =>  array(
                'class'   => 'login',
                'placeholder' => "enter your country"
                )
            ));
                  
           $builder
                
            ->add('submit','submit', array(
                'label' => 'Save',
                'attr' => array(
                    'class' => 'button'
                )
                
            ));
        
        
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
