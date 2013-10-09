<?php

namespace VolunteerManagementSystem\ProjectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('VolunteerManagementSystemProjectBundle:Default:index.html.twig', array('name' => $name));
    }
}
