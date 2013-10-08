<?php

namespace VolunteerManagementSystem\PagesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ProfilepageController extends Controller{
    
    public function profileAction(Request $request){
    {  $id = $request->get('id');
        $session=$this->getRequest()->getSession();
        $em = $this->getDoctrine()->getEntityManager();
        $repository = $em->getRepository('VolunteerManagementSystemRegistrationBundle:User');

        $user = $repository->findOneBy(array('id' => $id));
        if($user){
           $session->set('user', $user);
           return $this->render('VolunteerManagementSystemPagesBundle:profilepage:profilepage.html.twig', array('id'=>$id,'user' => $user));
        }
        else{
            
            return $this->render('VolunteerManagementSystemRegistrationBundle:Login:login.html.twig');
        }
       
    }
}}

?>
