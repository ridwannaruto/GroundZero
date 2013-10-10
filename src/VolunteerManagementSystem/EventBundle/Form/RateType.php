<?php

namespace VolunteerManagementSystem\EventBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RateType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name','text', array( 
            'read_only'=>'true','max_length'=>"2",
                
            'attr'   =>  array(
                'width'   => '',
               'widget' => 'text',
                
            
            )))
            ->add('rate')
            ->add('comment')
            
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'VolunteerManagementSystem\EventBundle\Entity\Rate'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'volunteermanagementsystem_eventbundle_rate';
    }
}
