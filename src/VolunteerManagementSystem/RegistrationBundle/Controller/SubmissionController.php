<?php

namespace VolunteerManagementSystem\RegistrationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use VolunteerManagementSystem\RegistrationBundle\Form\Type\RegistrationType;
use VolunteerManagementSystem\RegistrationBundle\Form\Model\Registration;

class SubmissionController extends Controller{
   
    public function submissionAction(Request $request){
        $em = $this->getDoctrine()->getEntityManager();
    
        $form = $this->createForm(new RegistrationType(), new Registration());
        
        $form->handleRequest($request);

        if ($form->isValid()) {
            $registration = $form->getData();
            $em->persist($registration->getUser());
            $em->flush();   
            
            return $this->redirect($this->generateUrl('welcome'));//go to home page
        }
        
        return $this->render(
            'VolunteerManagementSystemRegistrationBundle:Submission:submission.html.twig',//submission twig should contain that they have not sucessfully
            array('form' => $form->createView())//display form
        );
        
    }
}
?>
