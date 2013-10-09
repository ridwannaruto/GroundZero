<?php

namespace VolunteerManagementSystem\EventBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use VolunteerManagementSystem\EventBundle\Form\EventType;
use VolunteerManagementSystem\EventBundle\Entity\Event;
use Symfony\Component\HttpFoundation\Request;

class ViewEventController extends Controller
{
    public function viewEventAction(Request $request)
    {   
        $eventid=3;
        $id=45;
        $em =$this->getDoctrine()->getEntityManager();
        $repository =$em->getRepository('VolunteerManagementSystemEventBundle:Event');
        $repository2 =$em->getRepository('VolunteerManagementSystemRegistrationBundle:User');
        
        $event = $repository->findOneBy(array('id'=>$eventid));
       
        if($event){
            $array = $event->getSubscribers();
            $array[]=$id;
            $event->setSubscribers($array);
            $em->persist($event);
            $em->flush();
            $teamleaderid=$event->getTeamleader();
            $teamleader=$repository2->findOneBy(array('id'=>$teamleaderid));
            if($teamleader){
          return $this->render(
            'VolunteerManagementSystemEventBundle:Event:event.html.twig',
            array('event' => $event,'id'=>$id,'teamleader'=>$teamleader->getFirstName())
        );  
        }}
        return $this->render(
            'VolunteerManagementSystemEventBundle:Default:createevent.html.twig',
            array('id'=>$id)
        );}
        
     
}
