<?php

namespace VolunteerManagementSystem\WorkshopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use VolunteerManagementSystem\WorkshopBundle\Form\Type\WorkshopType;
use VolunteerManagementSystem\WorkshopBundle\Entity\Workshop;

class WorkshopCreationController extends Controller{
   
    public function createworkshopAction(){

        $form = $this->createForm(new WorkshopType(), new Workshop(), array(
            'action' => $this->generateUrl('workshop_submission'),
        ));

        return $this->render(
            'VolunteerManagementSystemWorkshopBundle:workshop:create.html.twig',
            array('form' => $form->createView())
        );
                
    }
}
?>
