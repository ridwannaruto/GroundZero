<?php

namespace VolunteerManagementSystem\PagesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProjectspageController extends Controller{
    
    public function projectsAction(){
     {   $session=$this->getRequest()->getSession();
       if($request->getMethod()=='POST'){
        
          $session->clear();
            $username= $request->get('username');
            $password= $request->get('password');
            
        $em =$this->getDoctrine()->getEntityManager();
        $repository =$em->getRepository('VolunteerManagementSystemRegistrationBundle:User');
        
        $user = $repository->findOneBy(array('username'=>$username,'password'=>$password));
        
        if($user){
            
           return $this->render('VolunteerManagementSystemPagesBundle:Projectspage:projectspage.html.twig', array('fname' => $user-> getFirstname(),'lname' => $user->getLastname(),'email' => $user->getEmail(),'gender' => $user->getGender(),'phone' => $user->getPhoneNumber()));
        }
       }
       
             return $this->redirect($this->generateUrl('login')); //go to login}
    
}
}}
?>
