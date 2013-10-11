<?php

namespace VolunteerManagementSystem\EventBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use VolunteerManagementSystem\NotificationBundle\Entity\Notification;
class EventConfirmationController extends Controller
{
    public function eventconfirmationAction(Request $request)
    {
        $id = $request ->get('id');
        
        $tlid = $request -> get('tlid');
        $tlname =$request -> get('tl');
        $event = $request -> get('event');
        $notification = new Notification;
        
        
        $notification->setName('Team leader Appointed ');
        $notification->setDetails('Congratulations! You have been appointed as the Team Leader for the following Event');
        $notification->setDate(new \DateTime());
        $notification->setUserId($tlid);
        
        $notification->setProject($event);
        $em = $this->getDoctrine()->getEntityManager();
        $em->persist($notification);
        $em->flush();
        return $this->render('VolunteerManagementSystemEventBundle:Confirm:eventconfirmation.html.twig',array('id'=>$id,'name'=>$tlname));
    }

}
