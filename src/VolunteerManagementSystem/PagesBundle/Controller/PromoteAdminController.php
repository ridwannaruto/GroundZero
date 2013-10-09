<?php

namespace VolunteerManagementSystem\PagesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use VolunteerManagementSystem\PagesBundle\Form\Model\AdminSelection;

class PromoteAdminController extends Controller{
   
    public function promotetoadminAction(){
        
        $volunteerselection = new VolunteerSelection();
        $form = $this->createForm(new AdminType(), $volunteerselection, array(
            'action' => $this->generateUrl('promote_to_admin'),
        ));   
        
        return $this->render(
            'VolunteerManagementSystemPagesBundle:VToadmin:vtoadmin.html.twig',
            array('form' => $form->createView())
        );
                
    }
}

?>
