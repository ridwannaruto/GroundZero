<?php

namespace VolunteerManagementSystem\PagesBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Doctrine\ORM\EntityRepository;

class AdminType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add(
            'id',
            'entity',array(
                'label' => 'choose member to be promoted',
                'class' => 'VolunteerManagementSystemRegistrationBundle:User',
                'property' => 'namewithinitials',
                'query_builder' => function(EntityRepository $er) {
                                    return $er->createQueryBuilder('p')
                                              ->where('p.accesslevel = :accesslevel')
                                              ->setParameter('accesslevel', 'Volunteer');
                                   }
            )    );
        $builder->add('submit', 'submit', array(
            'label' => 'Promote'))
        ;
    }

    public function getName()
    {
        return 'admin';
    }
}
?>
