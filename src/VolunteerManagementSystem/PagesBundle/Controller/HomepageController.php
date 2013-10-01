<?php

namespace VolunteerManagementSystem\PagesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use VolunteerManagementSystem\RegistrationBundle\Session\Login;

class HomepageController extends Controller
{
    public function welcomeAction()
    {   $session=$this->getRequest()->getSession();      
        
           if($session->has('login')){
               $login= $session->get('login');
               $username= $login->getUsername();
               $password= $login->getPassword();
            
        $em =$this->getDoctrine()->getEntityManager();
        $repository =$em->getRepository('VolunteerManagementSystemRegistrationBundle:User');
        
        $user = $repository->findOneBy(array('username'=>$username,'password'=>$password));
        
        if($user){
             return $this->render('VolunteerManagementSystemPagesBundle:Homepage:homepage.html.twig', array('fname' => $user-> getFirstname(),'lname' => $user->getLastname(),'email' => $user->getEmail(),'gender' => $user->getGender(),'phone' => $user->getPhoneNumber()));
       
        }
               
           }
                
        return $this->redirect($this->generateUrl('login')); //go to login
        
    }
}
