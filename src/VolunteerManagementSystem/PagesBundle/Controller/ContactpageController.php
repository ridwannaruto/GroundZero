<?php

namespace VolunteerManagementSystem\PagesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomepageController extends Controller{
    
    public function contactAction(){
        return $this->render('VolunteerManagementSystemPagesBundle:Contactpage:contactpage.html.twig');
    }
    
}

?>
