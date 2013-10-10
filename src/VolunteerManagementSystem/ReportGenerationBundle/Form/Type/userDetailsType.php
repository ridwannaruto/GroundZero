<?php

namespace VolunteerManagementSystem\ReportGenerationBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Doctrine\ORM\EntityRepository;

class userDetailsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add(
            'id',
            'entity',array(
                'label' => 'Choose Member to be promoted',
                'class' => 'VolunteerManagementSystemRegistrationBundle:User',
                'property' => 'namewithinitials',
                'query_builder' => function(EntityRepository $er) {
                                    return $er->createQueryBuilder('p');
                                   }
            )    );
        $builder->add('submit', 'submit',array(
            'label' => 'Find'
        ))
        ;
    }

    public function getName()
    {
        return 'details';
    }
}
?>
