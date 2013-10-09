<?php

namespace VolunteerManagementSystem\NewsBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class NewsType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('heading','text')
            ->add('description','textarea',array(
                'attr'=>array(
                    'rows'=>20,
                    'cols'=>70
                )
            ));
        $builder->add('submit','submit', array(
                'label' => 'Create',
                'attr' => array(
                    'class' => 'button'
                )
            ))
        ;
    }
    
    
    
      public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'VolunteerManagementSystem\NewsBundle\Entity\News'
        ));
    }

     /**
     * @return string
     */
    public function getName()
    {
        return 'volunteermanagementsystem_newsbundle_news';
    }
}
