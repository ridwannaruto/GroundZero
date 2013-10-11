<?php

namespace VolunteerManagementSystem\WorkshopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use VolunteerManagementSystem\WorkshopBundle\Form\Type\WorkshopType;
use Symfony\Component\HttpFoundation\Request;

use VolunteerManagementSystem\NewsBundle\Entity\News;
class WorkshopSubmissionController extends Controller{
   
    public function submitworkshopAction(Request $request){
        $id = $request->get('id');
        $em = $this->getDoctrine()->getEntityManager();
        
        $form = $this->createForm(new WorkshopType());

        $form->handleRequest($request);

        if ($form->isValid()) {
            $workshop = $form->getData();
            $em->persist($workshop);
            $em->flush();
            $deadline = $workshop->getRegistrationdeadline();
            $date = $workshop->getDate();
            $news = new News();
            $news->setHeading($workshop->getWorkshopname(). " Workshop");
            $news->setDescription("Hurry up and get registered for the ".$workshop->getWorkshopname(). " workshop before ".$deadline->format('Y-m-d') .". There are only ".$workshop->getCapacity()." vacancies left. Workshop is scheduled to be held on ".$date->format('Y-m-d'));
            $em->persist($news);
            $em->flush();
            return $this->render('VolunteerManagementSystemWorkshopBundle:submit:confirm.html.twig', array('id' => $id));
           
        }
        
        return $this->render('VolunteerManagementSystemWorkshopBundle:submit:confirm.html.twig', array('id' => $id));
           
            
    }
}
?>
