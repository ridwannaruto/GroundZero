<?php

namespace VolunteerManagementSystem\PagesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use VolunteerManagementSystem\PagesBundle\Form\Type\UserType;

class EditProfileController extends Controller
{
    public function editProfileAction()
    {   
        $session=$this->getRequest()->getSession();
        if($session->has('user')){
         $user= $session->get('user');
         $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('VolunteerManagementSystemRegistrationBundle:User')->find($user->getId());
        $form = $this->createForm(new UserType(), $entity, array('action' => $this->generateUrl('account_save'),));
            
        
       

    return $this->render('VolunteerManagementSystemPagesBundle:Profilepage:editprofile.html.twig', array('id' => $user->getId(),
        'form'   => $form->createView(),
    ));
       
        
     
        
        
    }else{
            return $this->render('VolunteerManagementSystemRegistrationBundle:Login:login.html.twig',array('id' => '') ); 
        }
    
    }
   
   
    
}
