<?php

namespace VolunteerManagementSystem\PagesBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use VolunteerManagementSystem\RegistrationBundle\Entity\User;

class SearchType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstname', 'text', array( 
            'label'  => 'Name of member',    
            'attr'   =>  array(
                'class'   => 'login',
                'placeholder' => "enter first name of member to find",
                'newline' => 'true',
                'widget' => 'text',
            
            )));
                      
            
            
           $builder
                
            ->add('submit','submit', array(
                'label' => 'Find',
                'attr' => array(
                    'class' => 'button'
                )
                
            ));
        ;
        
    }
    
    public function getName()
    {
        return 'volunteermanagementsystem_pagesbundle';
    }
}
