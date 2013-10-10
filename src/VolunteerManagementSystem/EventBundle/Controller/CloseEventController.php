<?php

namespace VolunteerManagementSystem\EventBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use VolunteerManagementSystem\EventBundle\Form\EventType;
use VolunteerManagementSystem\EventBundle\Entity\Event;
use VolunteerManagementSystem\EventBundle\Entity\Rate;
use VolunteerManagementSystem\EventBundle\Form\TaskType;
use VolunteerManagementSystem\EventBundle\Entity\Task;
use Symfony\Component\HttpFoundation\Request;


class CloseEventController extends Controller
{
    public function closeAction(Request $request)
    {   
        $eid=10;
        $id=$request->get('id');
        $em =$this->getDoctrine()->getEntityManager();
        $repositoryE =$em->getRepository('VolunteerManagementSystemEventBundle:Event');
        $repositoryU =$em->getRepository('VolunteerManagementSystemRegistrationBundle:User');
        
        $event = $repositoryE->findOneBy(array('id'=>$eid));
       
       
            $teamleaderid=$event->getTeamleader();
            $teamleader=$repositoryU->findOneBy(array('id'=>$teamleaderid));
            $volunteers= $event->getVolunteerslist();
        
         $task = new Task();

        // dummy code - this is here just so that the Task has some tags
        // otherwise, this isn't an interesting example
        
       // end dummy code
        foreach ($volunteers as $in){
                $tag1 = new Rate();
                $task->getTags()->add($tag1);
                $users[]=$repositoryE->findOneBy(array('id'=>$in));
            }

        $form = $this->createForm(new TaskType(), $task);

        $form->handleRequest($request);

        if ($form->isValid()) {
            // ... maybe do some form processing, like saving the Task and Tag objects
        }

        return $this->render('VolunteerManagementSystemEventBundle:Task:new.html.twig', array(
            'form' => $form->createView(),'id'=>3
        ));
    
        
        
            
                 return $this->render(
            'VolunteerManagementSystemEventBundle:Event:eventregistered.html.twig',
            array('event' => $event,'id'=>$id,'teamleader'=>$teamleader->getFirstName(),'eid'=>$eid,'users'=>$users)
        ); 
            
           
            
            
           
          return $this->render(
            'VolunteerManagementSystemEventBundle:Event:event.html.twig',
            array('event' => $event,'id'=>$id,'teamleader'=>$teamleader->getFirstName(),'eid'=>$eid)
        );  
        }
        
     
}
