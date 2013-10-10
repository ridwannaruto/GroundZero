<?php

namespace VolunteerManagementSystem\WorkshopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use VolunteerManagementSystem\WorkshopBundle\Form\Type\WorkshopType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class WorkshopSubmissionController extends Controller{
   
    public function submitworkshopAction(Request $request){

        $em = $this->getDoctrine()->getEntityManager();
        
        $form = $this->createForm(new WorkshopType());

        $form->handleRequest($request);

        if ($form->isValid()) {
            $workshop = $form->getData();
            $em->persist($workshop);
            $em->flush();
            
            return new Response("workshop created");
        }
        
            return new Response("workshop not created");
    }
}
?>
