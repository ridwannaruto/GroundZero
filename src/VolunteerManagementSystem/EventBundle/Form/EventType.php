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
            ->add('name')
            ->add('weight')
            ->add('description')
            ->add('goals')
            ->add('startdate')
            ->add('starttime')
            ->add('deadline')
            ->add('deadlinetime')
            ->add('enddate')
            ->add('endtime')
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
