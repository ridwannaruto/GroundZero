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
        $ef = $events->findOneBy(array('id' => $id));
        if ($user) {
            $project = $projects->findOneBy(array('id' => $pid));
            $project->setEvents(array(1,2));
            $em->persist($project);
            $em->flush();
            $pm = $repository->findOneBy(array('id' => $project->getProjectmanager()));
            $eventlist = $project->getEvents();
            $eventname = array();
            $eventid = array();
            foreach ($eventlist as $event){
                $eventid[] = $event;
                $eventname[]= $ef->getName();
            }
            
            
            
            if ($user->getAccessLevel() == 'Admin' || $user==$pm) {
                

                return $this->render('VolunteerManagementSystemProjectBundle:ProjectView:projectview.html.twig', array('id' => $id,'pm'=>$pm, 'project' => $project));
            }
            
            return $this->render('VolunteerManagementSystemProjectBundle:ProjectView:projectview.html.twig', array('id' => $id, 'project' => $project));
            
        }
        else {

            return $this->render('VolunteerManagementSystemRegistrationBundle:Login:login.html.twig');
        }
    }

}


