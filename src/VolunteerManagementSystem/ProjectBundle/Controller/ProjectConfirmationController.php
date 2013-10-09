<?php

namespace VolunteerManagementSystem\ProjectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use VolunteerManagementSystem\NotificationBundle\Entity\Notification;
class ProjectConfirmationController extends Controller
{
    public function projectconfirmationAction(Request $request)
    {
        $id = $request ->get('id');
        
        $pmid = $request -> get('pmid');
        $pmname =$request -> get('pm');
        $project = $request -> get('project');
        $notification = new Notification;
        
        
        $notification->setName('Project Manager Appointed ');
        $notification->setDetails('Congratulations! You have been appointed as the project manager for the following Project');
        $notification->setDate(new \DateTime());
        $notification->setUserId($pmid);
        
        $notification->setProject($project);
        $em = $this->getDoctrine()->getEntityManager();
        $em->persist($notification);
        $em->flush();
        return $this->render('VolunteerManagementSystemProjectBundle:ProjectConfirmation:projectconfirmation.html.twig',array('id'=>$id,'name'=>$pmname));
    }

}
