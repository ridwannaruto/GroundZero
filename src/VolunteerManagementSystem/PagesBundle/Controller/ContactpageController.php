<?php

namespace VolunteerManagementSystem\PagesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use VolunteerManagementSystem\PagesBundle\Form\Type\searchType;
use VolunteerManagementSystem\RegistrationBundle\Entity\User;


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
           $form = $this->createForm(new searchType(),new User(), array(
            'action' => $this->generateUrl('search_result',array('id'=>$id)),
        ));
           
           return $this->render(
                   'VolunteerManagementSystemPagesBundle:Contactpage:contactpage.html.twig', 
                   array('id' => $id,'form' => $form->createView(), 'result' => $result));
       }
        else{
            
            return $this->render('VolunteerManagementSystemRegistrationBundle:Login:login.html.twig');
        } }
    
}

?>
