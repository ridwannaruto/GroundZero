<?php

namespace VolunteerManagementSystem\ReportGenerationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use VolunteerManagementSystem\ReportGenerationBundle\Form\Type\userDetailsType;
use VolunteerManagementSystem\RegistrationBundle\Entity\User;

class userDetailsDisplayController extends Controller{
   
    public function formdisplayAction(){
        
        $form = $this->createForm(new userDetailsType(), new User(),array(
            'action' => $this->generateUrl('_display'),
        ));   
      
        return $this->render(
            'VolunteerManagementSystemReportGenerationBundle:Display:display.html.twig',
            array('form' => $form->createView())
        );
                
    }
}
?>
