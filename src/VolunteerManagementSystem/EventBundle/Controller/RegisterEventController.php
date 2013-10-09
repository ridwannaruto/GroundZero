<?php

namespace VolunteerManagementSystem\EventBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use VolunteerManagementSystem\EventBundle\Form\EventType;
use VolunteerManagementSystem\EventBundle\Entity\Event;
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
            
            
                
                 return $this->render(
            'VolunteerManagementSystemEventBundle:Event:eventregistered.html.twig',
            array('event' => $event,'id'=>$id,'teamleader'=>$teamleader->getFirstName(),'eid'=>$eid,'users'=>$users)
        );  
        }
        return $this->render(
            'VolunteerManagementSystemEventBundle:Default:createevent.html.twig',
            array('id'=>$id)
        );}
        
     
}
