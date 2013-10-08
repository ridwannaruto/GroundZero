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
           
           return $this->render('VolunteerManagementSystemPagesBundle:profilepage:profilepage.html.twig', array('id'=>$id,'fname' => $user-> getFirstname(),'lname' => $user->getLastname(),'email' => $user->getEmail(),'gender' => $user->getGender(),'phone' => $user->getPhoneNumber()));
        }
        else{
            
            return $this->render('VolunteerManagementSystemRegistrationBundle:Login:login.html.twig');
        }
       
    }
}}

?>
