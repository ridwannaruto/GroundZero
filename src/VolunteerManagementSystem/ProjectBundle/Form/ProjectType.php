<?php

namespace VolunteerManagementSystem\ProjectBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;


class ProjectType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', 'text', array( 
            'label'  => 'Project Name',
            'attr'  => array(
               'placeholder' =>'type your project name' 
            )
            ));
        
        $builder 
            ->add('description','textarea',array(
                'label' =>'Project description',
                'attr'=>array(
                    'placeholder'=>'project description'
                    )
            ));
        
       $builder 
            ->add('objectives','textarea',array(
                'label' =>'Objectives',
                'attr'=>array(
                    'placeholder'=>'specify the objectives of the project'
                    )
            ));
       
       $builder->add('projectmanager', 'entity', array(
            'label' =>'Project Manager  ',
            'class' => 'VolunteerManagementSystemRegistrationBundle:User',
            'property' => 'username',
            ));
      
        $builder 
            ->add('startdate','date',array(
                'input' => 'datetime',
                'widget' => 'single_text',
            'label' =>'Start Date',
                'attr'=>array(
                    'placeholder'=>'project start date'
                    )
            ));
        $builder 
            ->add('enddate','date',array(
                'input' => 'datetime',
                'widget' => 'single_text',
            'label' =>'End Date',
                'attr'=>array(
                    'placeholder'=>'project end date'
                    )
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
            'data_class' => 'VolunteerManagementSystem\ProjectBundle\Entity\Project'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'volunteermanagementsystem_projectbundle_project';
    }
}

?>


<?php





  