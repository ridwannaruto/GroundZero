<?php

namespace VolunteerManagementSystem\EventBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use VolunteerManagementSystem\EventBundle\Form\EventType;
use VolunteerManagementSystem\EventBundle\Entity\Event;
use Symfony\Component\HttpFoundation\Request;

class CreateEventController extends Controller
{
    public function createEventAction(Request $request )
    {   $event = new Event();
        $id=$request->get('id');
        $projectId=$request->get('projectId');
        $form = $this->createForm(new EventType(), $event, array(
            'action' => $this->generateUrl('save_event',array('id'=>$id,'projectId'=>$projectId)),
        ));
        
        return $this->render(
            'VolunteerManagementSystemEventBundle:Default:createevent.html.twig',
            array('form' => $form->createView(),'id'=>$id)
        );}
        
     public function eventSaveAction(Request $request)
    {
       $projectid = 1;
        $em = $this->getDoctrine()->getEntityManager();
      $id = 45;
        $event = new Event();
        $event->setProject($projectid);
        $array=array();
        $event->setVolunteerslist($array);
        $event->setSubscribers($array);
        $form = $this->createForm(new EventType(), $event);
        
       $form->handleRequest($request);
       
        if ($form->isValid()) {
        
     //   $event = $form->getData();
        $enddate= $event->getDeadline();
        $endtime=$event->getDeadlinetime();
        $event->setEnddate($enddate);
        $event->setEndtime($endtime);
        $Teamleader=$event->getTeamleader();
        $teamleaderid=$Teamleader->getId();
        $event->setTeamleader($teamleaderid);
        
        $em->persist($event);
        try{
            $em->flush();
        }
        catch(\Exception $e){
            
        }

        return $this->redirect($this->generateUrl('projectview',array('id'=>$id,'pid'=>$projectid)));
       }


        return $this->redirect($this->generateUrl('create_event',array('id'=>$id)));
    
    }
}
