<?php

namespace VolunteerManagementSystem\EventBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EventType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', 'text', array( 
            'label'  => 'Event Name',
            'attr'  => array(
               'placeholder' =>'type your Event name' 
            )
            ))
            ->add('weight')
            ->add('description','textarea',array(
                'label' =>'description',
                'attr'=>array(
                    'placeholder'=>'Give description about event'
                    )
            ))
            ->add('goals','textarea',array(
                'label' =>'Objectives',
                'attr'=>array(
                    'placeholder'=>'Give objectives'
                    )
            ))
            ->add('startdate','date',array(
                'input' => 'datetime',
                'widget' => 'single_text',
            'label' =>'Start Date',
                'attr'=>array(
                    'placeholder'=>'project start date'
                    )
            ))
            ->add('starttime','time',array(
                'input' => 'datetime',
                'widget' => 'single_text',
            'label' =>'Start Date',
                'attr'=>array(
                    'placeholder'=>'project start date'
                    )
            ))
             ->add('deadline','date',array(
                'input' => 'datetime',
                'widget' => 'single_text',
            'label' =>'Start Date',
                'attr'=>array(
                    'placeholder'=>'project start date'
                    )
            ))
            ->add('deadlinetime','time',array(
                'input' => 'datetime',
                'widget' => 'single_text',
            'label' =>'Start Date',
                'attr'=>array(
                    'placeholder'=>'project start date'
                    )
            ))
          
         
        ;
        $builder->add('teamleader', 'entity', array(
            'label' =>'Project Manager  ',
            'class' => 'VolunteerManagementSystemRegistrationBundle:User',
            'property' => 'username',
            ));
        $builder
                
            ->add('submit','submit', array(
                'label' => 'Create',
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
            'data_class' => 'VolunteerManagementSystem\EventBundle\Entity\Event'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'volunteermanagementsystem_eventbundle_event';
    }
}
