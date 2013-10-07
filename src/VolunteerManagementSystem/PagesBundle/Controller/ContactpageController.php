<?php

namespace VolunteerManagementSystem\PagesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ContactpageController extends Controller{
    
    public function contactAction(Request $request){
         $id = $request->get('id');
        $em = $this->getDoctrine()->getEntityManager();
        $repository = $em->getRepository('VolunteerManagementSystemRegistrationBundle:User');

        $user = $repository->findOneBy(array('id' => $id));
        if($user){
           $stmt = $this->getDoctrine()->getEntityManager()
                        ->getConnection()
                        ->prepare('select firstname,lastname,accesslevel,email,mobilenumber from user');
                        $stmt->execute();
                        $result = $stmt->fetchAll();
           return $this->render('VolunteerManagementSystemPagesBundle:Contactpage:contactpage.html.twig', array('id' => $id,'result'=> $result));
       }
        else{
            
            return $this->render('VolunteerManagementSystemRegistrationBundle:Login:login.html.twig');
        } }
    
}

?>
