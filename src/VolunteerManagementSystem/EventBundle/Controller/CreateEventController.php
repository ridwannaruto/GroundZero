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
            'VolunteerManagementSystemEventBundle:Default:createevent.html.twig',
            array('form' => $form->createView(),'id'=>$id)
        );}
        
     public function eventSaveAction(Request $request)
    {
       $projectid = $request->get('projectId');
        $em = $this->getDoctrine()->getEntityManager();
      $id = $request->get('id');
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
            return $this->render('ProjectBundle:Submission:projectsubmission.html.twig', array('id' => $id,'form' => $form->createView()));
        }

        return $this->redirect($this->generateUrl('create_event',array('id'=>$id)));
       }

        return $this->redirect($this->generateUrl('create_event',array('id'=>$id)));
    
    }
}
