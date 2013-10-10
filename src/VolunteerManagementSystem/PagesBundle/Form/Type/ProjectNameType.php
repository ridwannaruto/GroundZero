<?php

namespace VolunteerManagementSystem\PagesBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Doctrine\ORM\EntityRepository;

class ProjectNameType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add(
            'name',
            'entity',array(
                'label' => 'Project Name',
                'class' => 'VolunteerManagementSystemProjectBundle:Project',
                'property' => 'name',
                'query_builder' => function(EntityRepository $er) {
                                    return $er->createQueryBuilder('p');
                                   }
            )    );
        $builder->add('submit', 'submit', array(
            'label' => 'View Report'
        ))
        ;
    }

    public function getName()
    {
        return 'projectname';
    }
}

?>
