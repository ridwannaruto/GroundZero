<?php

namespace VolunteerManagementSystem\ReportGenerationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class TrackRecordController extends Controller {

    public function TrackRecordAction(Request $request) {
        $userId = $request->get('userId');
        $em1 = $this->getDoctrine()->getEntityManager();
        $em2 = $this->getDoctrine()->getEntityManager();

        $UserRepository = $em1->getRepository('VolunteerManagementSystemRegistrationBundle:User');
        $TrackRepository = $em2->getRepository('VolunteerManagementSystemReportGenerationBundle:TrackRecord');
        $user = $UserRepository->findOneBy(array('id' => $userId));
        $trackRecord = $TrackRepository->findOneBy(array('userId' => $userId));

        if ($user) {

            return $this->render('VolunteerManagementSystemPagesBundle:TrackRecord:TrackRecord.html.twig', array('fname' => $user->getFirstname(), 'lname' => $user->getLastname(),'jdate'=>$trackRecord->getJoinedDate(),'overallrating'=>$trackRecord->getOverallRating(),'events'=> $trackRecord->getEventHistory(),'comments'=> $trackRecord->getComments(),'workshops'=> $trackRecord->getWorkshopAttended()));
        } else {

            return $this->render('VolunteerManagementSystemRegistrationBundle:Login:login.html.twig');
        }
    }

}
