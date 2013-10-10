<?php

namespace VolunteerManagementSystem\WorkshopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('VolunteerManagementSystemWorkshopBundle:Default:index.html.twig', array('name' => $name));
    }
}
