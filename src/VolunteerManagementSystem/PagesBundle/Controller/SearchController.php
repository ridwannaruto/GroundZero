<?php

namespace VolunteerManagementSystem\PagesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use VolunteerManagementSystem\PagesBundle\Form\Type\searchType;

class SearchController extends Controller {

    public function searchAction(Request $request) {
        $em = $this->getDoctrine()->getEntityManager();
        $form = $this->createForm(new searchType());
        $form->handleRequest($request);
        $id = $request->get('id');
        if ($form->isValid()) {
            $data = $form->getData();
            $name = $data['firstname'];
            $em =$this->getDoctrine()->getEntityManager();
            $repository =$em->getRepository('VolunteerManagementSystemRegistrationBundle:User');
            $result = $repository->findBy(array('firstname'=>$name));
            return $this->render('VolunteerManagementSystemPagesBundle:Result:result.html.twig', array('form' => $form->createView(),'result' => $result,'id'=>$id));
        }
        return $this->render('VolunteerManagementSystemPagesBundle:Error:error.html.twig', array('form' => $form->createView(),'id'=>$id));
    }
}
?>
