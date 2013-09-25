<?php

namespace VolunteerManagementSystem\RegistrationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

use VolunteerManagementSystem\RegistrationBundle\Form\Type\RegistrationType;
use VolunteerManagementSystem\RegistrationBundle\Form\Model\Registration;

class RegistrationController extends Controller{
   
    public function registerAction(){
        
        $registration = new Registration();
        $form = $this->createForm(new RegistrationType(), $registration, array(
            'action' => $this->generateUrl('account_create'),
        ));
        
        return $this->render(
            'VolunteerManagementSystemRegistrationBundle:Registration:registration.html.twig',
            array('form' => $form->createView())
        );
                
    }
}
?>
