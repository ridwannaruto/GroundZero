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
        $eid=1;
        $id=1;
        $em =$this->getDoctrine()->getEntityManager();
        $repository =$em->getRepository('VolunteerManagementSystemEventBundle:Event');
        $repository2 =$em->getRepository('VolunteerManagementSystemRegistrationBundle:User');
        
        $event = $repository->findOneBy(array('id'=>$eid));
       
        if($event){
            $teamleaderid=$event->getTeamleader();
            $teamleader=$repository2->findOneBy(array('id'=>$teamleaderid));
            $array = $event->getSubscribers();
            $volunteers= $event->getVolunteerslist();
            if(in_array($id, $volunteers)){
               
            $users=array();
            foreach ($volunteers as $in){
                $users[]=$repository2->findOneBy(array('id'=>$in));
            }
                 return $this->render(
            'VolunteerManagementSystemEventBundle:Event:eventregistered.html.twig',
            array('event' => $event,'id'=>$id,'teamleader'=>$teamleader->getFirstName(),'eid'=>$eid,'users'=>$users)
        ); 
            }
            if (!in_array($id, $array)){
                $array[]=$id;
                $event->setSubscribers($array);
                $em->persist($event);
                $em->flush();
            }
            
            
           
          return $this->render(
            'VolunteerManagementSystemEventBundle:Event:event.html.twig',
            array('event' => $event,'id'=>$id,'teamleader'=>$teamleader->getFirstName(),'eid'=>$eid)
        );  
        }
        return $this->render(
            'VolunteerManagementSystemEventBundle:Default:createevent.html.twig',
            array('id'=>$id)
        );}
        
     
}
