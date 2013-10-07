<?php

namespace VolunteerManagementSystem\NotificationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('VolunteerManagementSystemNotificationBundle:Default:index.html.twig', array('name' => $name));
    }
}
