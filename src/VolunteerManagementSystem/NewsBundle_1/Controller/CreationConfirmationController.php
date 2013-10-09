<?php

namespace VolunteerManagementSystem\NewsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use VolunteerManagementSystem\NewsBundle\Form\Type\NewsType;
use VolunteerManagementSystem\NewsBundle\Entity\News;

class CreationConfirmationController extends Controller {

    public function creationconfirmAction(Request $request) {
        $em = $this->getDoctrine()->getEntityManager();

        $form = $this->createForm(new NewsType(), new News());

        $form->handleRequest($request);
        $id = $request->get('id');
        if ($form->isValid()) {
            $creation = $form->getData();
            $em->persist($creation);

            try {
                $em->flush();
            } catch (\Exception $e) {
                
            }

            return $this->redirect($this->generateUrl('news',array('id'=>$id)));
        }
           return $this->render('VolunteerManagementSystemNewsBundle:Error:error.html.twig', array('form' => $form->createView(),'id' => $id));
           
    

}

}

?>