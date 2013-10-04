<?php

namespace VolunteerManagementSystem\PagesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ProfilepageController extends Controller{
    
    public function profileAction(Request $request){
    {  $id = $request->get('id');
        $em = $this->getDoctrine()->getEntityManager();
        $repository = $em->getRepository('VolunteerManagementSystemRegistrationBundle:User');

        $user = $repository->findOneBy(array('id' => $id));
        if($user){
           
           return $this->render('VolunteerManagementSystemProfileBundle:Profile:profilepage.html.twig', array('id'=>$id,'user' =>$user,'username' => $user-> getUsername(),'pass' => $user-> getPassword(),'fname' => $user-> getFirstname(),'lname' => $user->getLastname(),'email' => $user->getEmail(),'gender' => $user->getGender(),'phone' => $user->getPhoneNumber(),'DFB'=> $user->getDateOfBirth()));
        }
        else{
            
            return $this->render('VolunteerManagementSystemRegistrationBundle:Login:login.html.twig');
        }
       
    }
}}

?>
