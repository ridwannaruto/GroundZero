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
        $notifications = $em->getRepository('VolunteerManagementSystemNotificationBundle:Notification');
        
        $user = $repository->findOneBy(array('id' => $id));
        if($user){
            

            $query = $notifications->createQueryBuilder('p')
                    ->where('p.userid = :id')
                    ->setParameter('id', $id)                    
                    ->setMaxResults(10)
                    ->orderBy('p.id','DESC')
                    ->getQuery();

            $notify = $query->getResult();
            
           if($user->getAccessLevel()=='Volunteer'){
           return $this->render('VolunteerManagementSystemPagesBundle:Homepage:homepage.html.twig', array('id' => $id,'notify'=>$notify));
           }
           if($user->getAccessLevel()=='Admin'){
           return $this->render('VolunteerManagementSystemPagesBundle:Homepage:homepageadmin.html.twig', array('id' => $id,'notify'=>$notify));
           }
           
        }
        else{
            
            return $this->render('VolunteerManagementSystemRegistrationBundle:Login:login.html.twig');
        }
       
    }
    
}
