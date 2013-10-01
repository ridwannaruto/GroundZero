<?php

namespace VolunteerManagementSystem\PagesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class NewapageController extends Controller{
    
    public function newsAction(){
        return $this->render('VolunteerManagementSystemPagesBundle:Newspage:newspage.html.twig');
    }
    
}

?>
