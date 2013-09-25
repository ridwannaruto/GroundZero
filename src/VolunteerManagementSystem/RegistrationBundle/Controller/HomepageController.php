<?php

namespace VolunteerManagementSystem\RegistrationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomepageController extends Controller{
    
    public function welcomeAction(){
        return $this->render('VolunteerManagementSystemRegistrationBundle:Homepage:homepage.html.twig');
    }
    
}

?>
