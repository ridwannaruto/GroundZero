<?php

namespace VolunteerManagementSystem\EventBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use VolunteerManagementSystem\EventBundle\Form\EventType;
use VolunteerManagementSystem\EventBundle\Entity\Event;
use Symfony\Component\HttpFoundation\Request;

class CreateEventController extends Controller
{
    public function createEventAction()
    {   $event = new Event();
        $id=45;
        $projectId= 3;
        $form = $this->createForm(new EventType(), $event, array(
            'action' => $this->generateUrl('save_event',array('id'=>$id,'projectId'=>$projectId)),
        ));
        
        return $this->render(
            'VolunteerManagementSystemEventBundle:Default:event.html.twig',
            array('form' => $form->createView())
        );}
        
     public function eventSaveAction(Request $request)
    {
       $projectid = $request->get('projectId');
        $em = $this->getDoctrine()->getEntityManager();
      $id = $request->get('id');
        $event = new Event();
        
        $form = $this->createForm(new EventType(), new Event());
        
       $form->handleRequest($request);
       
        if ($form->isValid()) {
        
        $event = $form->getData();
        $Teamleader=$event->getTeamleader();
        $teamleaderid=$Teamleader->getId();
        $event->setTeamleader($teamleaderid);
        
        $em->persist($event);
        try{
            $em->flush();
        }
        catch(\Exception $e){
            return $this->render('ProjectBundle:Submission:projectsubmission.html.twig', array('id' => $id,'form' => $form->createView()));
        }

        return $this->redirect($this->generateUrl('create_event',array('id'=>$id)));
       }

    return $this->render(
        'ProjectBundle:Error:error.html.twig',
       array('form' => $form->createView(),'id'=>$id)
    );
    }
}
