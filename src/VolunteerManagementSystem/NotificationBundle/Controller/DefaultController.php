<?php

namespace VolunteerManagementSystem\NotificationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use VolunteerManagementSystem\NotificationBundle\Entity\Notification;
use Symfony\Component\HttpFoundation\Response;
class DefaultController extends Controller
{
    public function indexAction()
    {
        $notification = new Notification;
        
        
        $notification->setName('School Seminar');
        $notification->setDetails('Seminar date is on Monday 17th of October 2013');
        $notification->setDate(new \DateTime());
        $notification->setUserId(1);
        
        $notification->setProject('Exmo');
        $em = $this->getDoctrine()->getEntityManager();
        $em->persist($notification);
        $em->flush();
        
        return $this->render('VolunteerManagementSystemNotificationBundle:Default:index.html.twig');
    }
}
