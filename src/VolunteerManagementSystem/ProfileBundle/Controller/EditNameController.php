<?php

namespace VolunteerManagementSystem\ProfileBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use VolunteerManagementSystem\RegistrationBundle\Form\Model\Registration;
use VolunteerManagementSystem\RegistrationBundle\Form\Type\UserType;

class EditNameController extends Controller
{
    public function editNameAction()
    {   
        $session=$this->getRequest()->getSession();
        if($session->has('user')){
         $user= $session->get('user');
         $em = $this->getDoctrine()->getEntityManager();

        
            $entity = $em->getRepository('VolunteerManagementSystemRegistrationBundle:User')->find($user->getId());

            if (!$entity) {
            throw $this->createNotFoundException('Unable to find User entity.');
            }

                $form = $this->createForm(new UserType(), $entity);

                $request = $this->getRequest();

                if ($request->getMethod() === 'submit')
                {
                    $form->bindRequest($request);

                    if ($form->isValid()) {
                        $em->persist($entity);
                        $em->flush();

                        return $this->redirect($this->generateUrl('profile'));
                    }
                    

                    $em->refresh($user); // Add this line
                }

    return $this->render('VolunteerManagementSystemProfileBundle:EditName:editName.html.twig', array('id' => $user->getId(),
        'entity'      => $entity,
        'form'   => $form->createView(),
    ));
       
        
     
        
        
    }else{
            return $this->render('VolunteerManagementSystemRegistrationBundle:Login:login.html.twig',array('id' => '') ); 
        }
    
    }
    
}
