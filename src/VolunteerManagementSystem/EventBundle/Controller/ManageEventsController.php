<?php

namespace VolunteerManagementSystem\EventBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ManageEventsController extends Controller{
    
    public function manageAction(Request $request){
        $id = $request->get('id');
        $em = $this->getDoctrine()->getEntityManager();
        $repository = $em->getRepository('VolunteerManagementSystemEventBundle:Event');
        $repositoryP = $em->getRepository('VolunteerManagementSystemProjectBundle:Project');
        $events= $repository->findAll();
        $result=array();
        foreach ($events as $event) {
            
            $pid= $event->getProject();
            
            $project=$repositoryP->findOneBy(array('id'=>$pid));
            $pname=$project->getName();
            $volunteers= $event->getVolunteerslist();
            if($volunteers!=null){
            if(in_array( $id,$volunteers)){
                $result[]=array($event,$pname);
                
            }
            }
            
        }
        
            
            return $this->render('VolunteerManagementSystemEventBundle:Manage:eventspage.html.twig',array('result' =>$result,'id'=>$id));
        }
        
       

       
}
