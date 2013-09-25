<?php

namespace VolunteerManagementSystem\RegistrationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        echo "okay<BR>";
        return $this->render('VolunteerManagementSystemRegistrationBundle:Default:index.html.twig', array('name' => $name));
    }
}
