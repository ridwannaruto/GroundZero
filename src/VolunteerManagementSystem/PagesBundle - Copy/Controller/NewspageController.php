<?php

namespace VolunteerManagementSystem\PagesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class NewspageController extends Controller{
    
    public function newsAction(Request $request){
         $id = $request->get('id');
        $em = $this->getDoctrine()->getEntityManager();
        $repository = $em->getRepository('VolunteerManagementSystemRegistrationBundle:User');

        $user = $repository->findOneBy(array('id' => $id));
        if($user){
           
           return $this->render('VolunteerManagementSystemPagesBundle:Newspage:newspage.html.twig', array('id' => $id));
       }
        else{
            
            return $this->render('VolunteerManagementSystemRegistrationBundle:Login:login.html.twig');
        }
    }
    
}

?>
