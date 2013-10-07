<?php

namespace VolunteerManagementSystem\PagesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use VolunteerManagementSystem\PagesBundle\Form\Type\UserType;

class SaveUserController extends Controller {

    public function saveAction(Request $request) {
        $em = $this->getDoctrine()->getEntityManager();
        $session=$this->getRequest()->getSession();
        if($session->has('user')){
         $user= $session->get('user');
         
        }
        $entity = $em->getRepository('VolunteerManagementSystemRegistrationBundle:User')->find($user->getId());
        $form = $this->createForm(new UserType(), $entity);

        $form->handleRequest($request);
        
            if ($form->isValid()) {

                $em->persist($entity);

                try {
                    $em->flush();
                } catch (\Exception $e) {
                    return $this->render('VolunteerManagementSystemPagesBundle:Profilepage:editprofile.html.twig', array('form' => $form->createView(),'id' => $user->getId()));
                }

                return $this->render('VolunteerManagementSystemPagesBundle:Profilepage:profilepage.html.twig', array('id'=>$user->getID(),'user' =>$user));
            }
        
           return $this->render('VolunteerManagementSystemRegistrationBundle:Error:.html.twig', array('form' => $form->createView()));
           
    }

}

?>
