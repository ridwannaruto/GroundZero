<?php

namespace VolunteerManagementSystem\EventBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TaskType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                ->add('submit','submit', array(
                'label' => 'finished',
                'attr' => array(
                    'class' => 'button'
                )
                
            ));;

        $builder->add('rates', 'collection', array('type' => new RateType()));
        
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'VolunteerManagementSystem\EventBundle\Entity\Task',
        ));
    }

    public function getName()
    {
        return 'task';
    }
}
