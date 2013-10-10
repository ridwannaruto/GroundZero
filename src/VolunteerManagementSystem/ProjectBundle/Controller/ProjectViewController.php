<?php

namespace VolunteerManagementSystem\ProjectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class ProjectViewController extends Controller
{
    public function projectviewAction(Request $request)
    {
        $id = $request->get('id');
        $pid = $request->get('pid');
        $em = $this->getDoctrine()->getEntityManager();
        $repository = $em->getRepository('VolunteerManagementSystemRegistrationBundle:User');
        $projects = $em->getRepository('VolunteerManagementSystemProjectBundle:Project');
        $events= $em->getRepository('VolunteerManagementSystemEventBundle:Event');
        
        $user = $repository->findOneBy(array('id' => $id));
        if ($user) {
            $project = $projects->findOneBy(array('id' => $pid));
            
            $pm = $repository->findOneBy(array('id' => $project->getProjectmanager()));
            $eventlist = $project->getEvents();
            $proevents = array();
            if ($eventlist != null){
            foreach ($eventlist as $event){
                $eventid = $event;
                $eventname = $events->findOneBy(array('id'=>$event))->getName(); 
                $proevents[] = array($eventid,$eventname);
                
                
            }
            }
            
            
            if ($user->getAccessLevel() == 'Admin' || $user==$pm) {
                

                return $this->render('VolunteerManagementSystemProjectBundle:ProjectView:projectviewadmin.html.twig', array('pid'=>$pid,'id' => $id,'pm'=>$pm, 'project' => $project,'events'=>$proevents));
            }
            
            return $this->render('VolunteerManagementSystemProjectBundle:ProjectView:projectview.html.twig', array('pid'=>$pid,'id' => $id, 'project' => $project,'events'=>$proevents));
            
        }
        else {

            return $this->render('VolunteerManagementSystemRegistrationBundle:Login:login.html.twig');
        }
    }

}


