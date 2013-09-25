<?php

namespace VolunteerManagementSystem\StylesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('VolunteerManagementSystemStylesBundle:Default:index.html.twig', array('name' => $name));
    }
}
