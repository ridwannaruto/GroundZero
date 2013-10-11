<?php

namespace VolunteerManagementSystem\ProjectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use VolunteerManagementSystem\ProjectBundle\Form\ProjectType;
use VolunteerManagementSystem\ProjectBundle\Entity\Project;
use Symfony\Component\HttpFoundation\Request;

class ProjectCreationController extends Controller {

    public function projectcreationAction(Request $request) {
        $id = $request->get('id');
        $em = $this->getDoctrine()->getEntityManager();
        $repository = $em->getRepository('VolunteerManagementSystemRegistrationBundle:User');



        $user = $repository->findOneBy(array('id' => $id));
        if ($user) {
            $Project = new Project();
            $form = $this->createForm(new ProjectType(), $Project, array(
                'action' => $this->generateUrl('projectsubmission', array('id' => $id)),
            ));



            if ($user->getAccessLevel() == 'Volunteer') {
                return $this->render('VolunteerManagementSystemPagesBundle:Error:adminerror.html.twig', array('id' => $id));
            }
            if ($user->getAccessLevel() == 'Admin') {
                return $this->render('VolunteerManagementSystemProjectBundle:ProjectCreation:projectcreation.html.twig', array('form' => $form->createView(), 'id' => $id));
            }
        } else {

            return $this->render('VolunteerManagementSystemRegistrationBundle:Login:login.html.twig');
        }
    }

}

