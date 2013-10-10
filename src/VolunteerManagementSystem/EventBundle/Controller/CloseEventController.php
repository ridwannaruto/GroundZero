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
        $eid=$request->get('eid');
        $id=$request->get('id');
        $em =$this->getDoctrine()->getEntityManager();
        $repositoryE =$em->getRepository('VolunteerManagementSystemEventBundle:Event');
        $repositoryU =$em->getRepository('VolunteerManagementSystemRegistrationBundle:User');
        
        $event = $repositoryE->findOneBy(array('id'=>$eid));
        $volunteers= $event->getVolunteerslist();
        
         $task = new Task();

        foreach ($volunteers as $in){
                $us=$repositoryU->findOneBy(array('id'=>$in));
                $users[]=$us;
                $name=$us->getUsername();
                $rate = new Rate();
                $rate->setName($name);
                $task->getRates()->add($rate);
            }

        $form = $this->createForm(new TaskType(), $task,array(
            'action' => $this->generateUrl('finished_event',$paramters =array('eid'=>$eid,'id'=>$id))));

        

        return $this->render('VolunteerManagementSystemEventBundle:Task:new.html.twig', array(
            'form' => $form->createView(),'eid'=>$eid,'id'=>$id,
        ));
    
    } 
     public function finishedAction(Request $request)
    {   
        $eid=$request->get('eid');
        $id=$request->get('id');
        $em =$this->getDoctrine()->getEntityManager();
        $em2=$this->getDoctrine()->getEntityManager();
        $repositoryE =$em->getRepository('VolunteerManagementSystemEventBundle:Event');
        $repositoryU =$em->getRepository('VolunteerManagementSystemRegistrationBundle:User');
        $TrackRepository = $em2->getRepository('VolunteerManagementSystemReportGenerationBundle:TrackReport');
        $event = $repositoryE->findOneBy(array('id'=>$eid));
        $projectId=$event->getProject();
        $eventWeight=$event->getWeight();
        $volunteers= $event->getVolunteerslist();
        
         $task = new Task();

        foreach ($volunteers as $in){
                $us=$repositoryU->findOneBy(array('id'=>$in));
                $name=$us->getUsername();
                $rate = new Rate();
                $rate->setName($name);
                $task->getRates()->add($rate);
            }
        $form = $this->createForm(new TaskType(), $task);
        $form->handleRequest($request);
        
        
        if ($form->isValid()) {
            $task=$form->getData();
            
            foreach ($task->getRates() as $rate) {  
                $user=$repositoryU->findOneBy(array('username'=>$rate->getName()));
                $trackRecord = $TrackRepository->findOneBy(array('userId' => $user->getId()));
                $trackRecord->UpdateRating($projectId,$eid,$eventWeight,$rate->getRate());
                $em2->persist($trackRecord);
                $em2->flush();
            }
            
            
        }          
      

       
         return $this->redirect('projectview',$paramters =array('pid'=>$projectId,'id'=>$id));
    } 
     
}
