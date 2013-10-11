<?php

namespace VolunteerManagementSystem\EventBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use VolunteerManagementSystem\EventBundle\Form\EventType;
use VolunteerManagementSystem\EventBundle\Entity\Event;
use VolunteerManagementSystem\NotificationBundle\Entity\Notification;
use Symfony\Component\HttpFoundation\Request;

class RegisterEventController extends Controller
{
    public function registerAction(Request $request)
    {   
        $eid=$request->get('eid');
        $id=$request->get('id');
        $em =$this->getDoctrine()->getEntityManager();
        $repository =$em->getRepository('VolunteerManagementSystemEventBundle:Event');
        $repository2 =$em->getRepository('VolunteerManagementSystemRegistrationBundle:User');
        
        $event = $repository->findOneBy(array('id'=>$eid));
       
        if($event){
            $teamleaderid=$event->getTeamleader();
            $teamleader=$repository2->findOneBy(array('id'=>$teamleaderid));
            $array = $event->getVolunteerslist();
            $ename=$event->getName();
            if (!in_array($id, $array)){
                $array[]=$id;
                $event->setVolunteerslist($array);
                $em->persist($event);
                $em->flush();
            }
            $volunteers=$event->getVolunteerslist();
           
           
            $users=array();
            foreach ($volunteers as $in){
                $users[]=$repository2->findOneBy(array('id'=>$in));
            }
            
            
        
   
        
        $notification = new Notification;
        
        
        $notification->setName('Team leader Appointed ');
        $notification->setDetails('Congratulations! You have been appointed as the Team Leader for the following Event');
        $notification->setDate(new \DateTime());
        $notification->setUserId($teamleaderid);
        
        $notification->setProject($ename);
        $em = $this->getDoctrine()->getEntityManager();
        $em->persist($notification);
        $em->flush();
            
            
                
                 return $this->render(
            'VolunteerManagementSystemEventBundle:Event:eventuser.html.twig',
            array('event' => $event,'id'=>$id,'teamleader'=>$teamleader->getFirstName(),'eid'=>$eid,'users'=>$users)
        );  
        }
        return $this->render(
            'VolunteerManagementSystemEventBundle:Default:createevent.html.twig',
            array('id'=>$id)
        );}
        
     
}
