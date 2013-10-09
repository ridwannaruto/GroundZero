<?php

namespace VolunteerManagementSystem\PagesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ProjectspageController extends Controller{
    
    public function projectsAction(Request $request){
      $id = $request->get('id');
        $em = $this->getDoctrine()->getEntityManager();
        $repository = $em->getRepository('VolunteerManagementSystemRegistrationBundle:User');
        $projects = $em->getRepository('VolunteerManagementSystemProjectBundle:Project');
        $user = $repository->findOneBy(array('id' => $id));
        if($user){          
            $query = $projects->createQueryBuilder('p')
                    ->orderBy('p.id','DESC')
                    ->getQuery();
            $result = $query->getResult();
          
          if($user->getAccessLevel()=='Volunteer'){
           return $this->render('VolunteerManagementSystemPagesBundle:Projectspage:projectspage.html.twig', array('id' => $id,'result'=> $result));
           }
           if($user->getAccessLevel()=='Admin'){
           return $this->render('VolunteerManagementSystemPagesBundle:Projectspage:projectspageadmin.html.twig', array('id' => $id,'result'=>$result));
           } }
        else{
            
            return $this->render('VolunteerManagementSystemRegistrationBundle:Login:login.html.twig');
        }
        
       

       
}}
?>
