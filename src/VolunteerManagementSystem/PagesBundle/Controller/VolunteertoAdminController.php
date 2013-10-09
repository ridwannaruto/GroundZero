<?php

namespace VolunteerManagementSystem\PagesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use VolunteerManagementSystem\PagesBundle\Form\Type\AdminType;
use VolunteerManagementSystem\RegistrationBundle\Entity\User;

class VolunteertoAdminController extends Controller{
   
    public function volunteertoadminselectionAction(){
        
        $form = $this->createForm(new AdminType(), array(
            'action' => $this->generateUrl('promote_to_admin'),
        ));   
        
        return $this->render(
            'VolunteerManagementSystemPagesBundle:VToadmin:vtoadmin.html.twig',
            array('form' => $form->createView())
        );
                
    }
}
?>
