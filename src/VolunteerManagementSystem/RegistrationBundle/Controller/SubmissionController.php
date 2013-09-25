<?php

namespace VolunteerManagementSystem\RegistrationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use VolunteerManagementSystem\RegistrationBundle\Form\Type\RegistrationType;
use VolunteerManagementSystem\RegistrationBundle\Form\Model\Registration;

class SubmissionController extends Controller{
   
    public function submissionAction(Request $request){
        $em = $this->getDoctrine()->getEntityManager();
        
        $form = $this->createForm(new RegistrationType(), new Registration());
        
        $form->handleRequest($request);

        if ($form->isValid()) {
            echo "in";
            $registration = $form->getData();
            $em->persist($registration->getUser());
            $em->flush();

            return $this->redirect();
        }

        return $this->render(
            'VolunteerManagementSystemRegistrationBundle:Submission:submission.html.twig',
            array('form' => $form->createView())
        );
    }
}
?>
