<?php

namespace VolunteerManagementSystem\WorkshopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use VolunteerManagementSystem\WorkshopBundle\Form\Type\WorkshopType;
use VolunteerManagementSystem\WorkshopBundle\Entity\Workshop;

class WorkshopCreationController extends Controller {

    public function createworkshopAction(Request $request) {
        $id = $request->get('id');
        $em = $this->getDoctrine()->getEntityManager();
        $repository = $em->getRepository('VolunteerManagementSystemRegistrationBundle:User');
        $user = $repository->findOneBy(array('id' => $id));
        if ($user) {


            if ($user->getAccessLevel() == 'Volunteer') {
                return $this->render('VolunteerManagementSystemPagesBundle:Error:adminerror.html.twig', array('id' => $id));
            }
            if ($user->getAccessLevel() == 'Admin') {
                $form = $this->createForm(new WorkshopType(), new Workshop(), array(
                    'action' => $this->generateUrl('workshop_submission'),
                ));
                return $this->render(
                'VolunteerManagementSystemWorkshopBundle:workshop:create.html.twig',
                array('form' => $form->createView(), 'id' => $id))
                ;
            }
        } else {

            return $this->render('VolunteerManagementSystemRegistrationBundle:Login:login.html.twig');
        }
    }

}

?>
