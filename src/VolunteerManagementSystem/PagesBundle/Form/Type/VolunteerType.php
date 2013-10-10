<?php

namespace VolunteerManagementSystem\PagesBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Doctrine\ORM\EntityRepository;

class VolunteerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add(
            'id',
            'entity',array(
                'label' => 'choose administrator to demote',
                'class' => 'VolunteerManagementSystemRegistrationBundle:User',
                'property' => 'namewithinitials',
                'query_builder' => function(EntityRepository $er) {
                                    return $er->createQueryBuilder('p')
                                              ->where('p.accesslevel = :accesslevel')
                                              ->setParameter('accesslevel', 'Admin');
                                   }
            )    );
        $builder->add('submit', 'submit', array(
            'label' => 'Demote'))
        ;
    }

    public function getName()
    {
        return 'volunteer';
    }
}
?>
