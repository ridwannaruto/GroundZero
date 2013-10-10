<?php

namespace VolunteerManagementSystem\EventBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use VolunteerManagementSystem\EventBundle\Form\EventType;
use VolunteerManagementSystem\EventBundle\Entity\Event;
use Symfony\Component\HttpFoundation\Request;

class CloseEventController extends Controller
{
    public function closeAction(Request $request)
    {   
        $eid=$request->get('eid');
        $id=$request->get('id');
        $em =$this->getDoctrine()->getEntityManager();
        $repositoryE =$em->getRepository('VolunteerManagementSystemEventBundle:Event');
        $repositoryU =$em->getRepository('VolunteerManagementSystemRegistrationBundle:User');
        
        $event = $repositoryE->findOneBy(array('id'=>$eid));
       
       
            $teamleaderid=$event->getTeamleader();
            $teamleader=$repositoryU->findOneBy(array('id'=>$teamleaderid));
            $volunteers= $event->getVolunteerslist();
          
            foreach ($volunteers as $in){
                $users[]=$repositoryE->findOneBy(array('id'=>$in));
            }
                 return $this->render(
            'VolunteerManagementSystemEventBundle:Event:eventregistered.html.twig',
            array('event' => $event,'id'=>$id,'teamleader'=>$teamleader->getFirstName(),'eid'=>$eid,'users'=>$users)
        ); 
            
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
        
     
}
