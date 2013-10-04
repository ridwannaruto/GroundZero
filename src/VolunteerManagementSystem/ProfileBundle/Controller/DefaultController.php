<?php

namespace VolunteerManagementSystem\ProfileBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('VolunteerManagementSystemProfileBundle:Default:index.html.twig', array('name' => $name));
    }
}
