<?php

namespace VolunteerManagementSystem\PagesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class HomepageController extends Controller
{
    public function welcomeAction(Request $request)
    { 
        $id = $request->get('id');
        $em = $this->getDoctrine()->getEntityManager();
        $repository = $em->getRepository('VolunteerManagementSystemRegistrationBundle:User');
        $result = array('name'=>'Exmo Exhibition','details'=>'Due date changed on tomorrow');
        $user = $repository->findOneBy(array('id' => $id));
        if($user){
           if($user->getAccessLevel()=='Volunteer')
           return $this->render('VolunteerManagementSystemPagesBundle:Homepage:homepage.html.twig', array('id' => $id,'result'=>$result));
           if($user->getAccessLevel()=='Admin')
           return $this->render('VolunteerManagementSystemPagesBundle:Homepage:homepageadmin.html.twig', array('id' => $id,'result'=>$result));
       
           
        }
        else{
            
            return $this->render('VolunteerManagementSystemRegistrationBundle:Login:login.html.twig');
        }
       
    }
    
}
