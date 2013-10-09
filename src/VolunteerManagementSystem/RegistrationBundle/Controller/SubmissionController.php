<?php

namespace VolunteerManagementSystem\RegistrationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use VolunteerManagementSystem\RegistrationBundle\Form\Type\RegistrationType;
use VolunteerManagementSystem\RegistrationBundle\Form\Model\Registration;

class SubmissionController extends Controller {

    public function submissionAction(Request $request) {
        $em = $this->getDoctrine()->getEntityManager();
        
        $form = $this->createForm(new RegistrationType(), new Registration());

        $form->handleRequest($request);

        if ($form->isValid()) {
            $registration = $form->getData();
            $em->persist($registration->getUser());
            
           
            try {
            
                $em->flush();
                
               
            } catch (Exception $e) {
                return $this->render('VolunteerManagementSystemRegistrationBundle:Submission:submission.html.twig', array('form' => $form->createView()));
            }

            return $this->redirect($this->generateUrl('confirm')); //go to home page
        }
        
           return $this->render('VolunteerManagementSystemRegistrationBundle:Error:error.html.twig', array('form' => $form->createView()));
           
    }

}

?>
