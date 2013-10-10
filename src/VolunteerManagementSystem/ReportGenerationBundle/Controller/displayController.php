<?php

namespace VolunteerManagementSystem\ReportGenerationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use VolunteerManagementSystem\ReportGenerationBundle\Form\Type\userDetailsType;

use Symfony\Component\HttpFoundation\Request;

class displayController extends Controller{
   
    public function displayAction(Request $request){
 
        $form = $this->createForm(new userDetailsType());
        $form->handleRequest($request);
        
        if ($form->isValid()) {
            $data = $form->getData();
            $id = $data['id']->getId();
            echo $id;
        }
        
          
        
    }
}

?>
