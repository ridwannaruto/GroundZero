<?php

namespace VolunteerManagementSystem\ReportGenerationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use VolunteerManagementSystem\ReportGenerationBundle\Form\Type\userDetailsType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class displayController extends Controller {

    public function displayAction(Request $request) {
        $id = $request->get('id');
        $em = $this->getDoctrine()->getEntityManager();
        $repository = $em->getRepository('VolunteerManagementSystemRegistrationBundle:User');

        $user = $repository->findOneBy(array('id' => $id));
        $form = $this->createForm(new userDetailsType());
        $form->handleRequest($request);
        if ($user) {
            if ($user->getAccessLevel() == 'Admin') {
                if ($form->isValid()) {
                    $data = $form->getData();
                    $userId = $data['id']->getId();

                    $em1 = $this->getDoctrine()->getEntityManager();
                    $em2 = $this->getDoctrine()->getEntityManager();

                    $UserRepository = $em1->getRepository('VolunteerManagementSystemRegistrationBundle:User');
                    $TrackRepository = $em2->getRepository('VolunteerManagementSystemReportGenerationBundle:TrackReport');
                    $user = $UserRepository->findOneBy(array('id' => $userId));
                    $trackRecord = $TrackRepository->findOneBy(array('userId' => $userId));
                    return $this->render('VolunteerManagementSystemReportGenerationBundle:display:userDetails.html.twig', array('id' => $id, 'user' => $user, 'trackrecord' => $trackRecord));
                }
                return $this->render('VolunteerManagementSystemPagesBundle:Error:adminerror.html.twig', array('id' => $id));
            } else {

                return $this->render('VolunteerManagementSystemRegistrationBundle:Login:login.html.twig');
            }
        }
    }

}

?>
