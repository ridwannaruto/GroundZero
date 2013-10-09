<?php

namespace VolunteerManagementSystem\RegistrationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ConfirmController extends Controller{
    
    public function confirmAction(){
        
        return $this->render('VolunteerManagementSystemRegistrationBundle:Confirm:confirm.html.twig');
    }
    
}

?>