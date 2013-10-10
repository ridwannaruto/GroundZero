<?php

namespace VolunteerManagementSystem\PagesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Request;
use VolunteerManagementSystem\PagesBundle\Form\Type\ProjectNameType;

class testController extends Controller{
   
    public function testAction(Request $request){
        
        $form = $this->createForm(new ProjectNameType());
        $form->handleRequest($request);

        if ($form->isValid()) {
            
            $data = $form->getData();
            $projectID = $data['name']->getId();          
       
        }
 
    }
}

?>
