<?php

namespace VolunteerManagementSystem\ReportGenerationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
Use VolunteerManagementSystem\ReportGenerationBundle\Entity\TrackReport;
use Symfony\Component\HttpFoundation\Response;

class TrackRecordController extends Controller {

    public function TrackRecordAction(Request $request) {

        $userId = $request->get('userId');
        $em1 = $this->getDoctrine()->getEntityManager();
        $em2 = $this->getDoctrine()->getEntityManager();

        $UserRepository = $em1->getRepository('VolunteerManagementSystemRegistrationBundle:User');
        $TrackRepository = $em2->getRepository('VolunteerManagementSystemReportGenerationBundle:TrackReport');
        $ProjectRepository= $em2->getRepository('VolunteerManagementSystemProjectBundle:Project');
     
        $user = $UserRepository->findOneBy(array('id' => $userId));
        $trackRecord = $TrackRepository->findOneBy(array('userId' => $userId));
        $projectIds=$trackRecord->getProjectHistory();
        $projects=array();        
        foreach ($projectIds as $pId )
        {
            $projects[]=$ProjectRepository->find($pId);
            
            
                    
        }

        if ($user) {

            return $this->render('VolunteerManagementSystemReportGenerationBundle:TrackRecord:TrackRecord.html.twig', array('fname' => $user->getFirstname(), 'lname' => $user->getLastname(), 'jdate' => $trackRecord->getJoinedDate(), 'overallrating' => $trackRecord->getOverallRating(), 'projects' => $projects, 'comments' => $trackRecord->getComments(), 'workshops' => $trackRecord->getWorkshopsAttended(), 'id' => $userId));
        } else {

            return new Response('User not found!!!');
        }
    }

    public function InitializeTrackRecordAction(Request $request) {
        $userId = $request->get('id');
        $em1 = $this->getDoctrine()->getEntityManager();
        $em2 = $this->getDoctrine()->getEntityManager();

        $UserRepository = $em1->getRepository('VolunteerManagementSystemRegistrationBundle:User');
        $TrackRepository = $em2->getRepository('VolunteerManagementSystemReportGenerationBundle:TrackReport');

        $user = $UserRepository->findOneBy(array('id' => $userId));
        $trackRecord = $TrackRepository->findOneBy(array('userId' => $userId));
        
        if ($trackRecord) {
            return new Response('Already Initialized!!!');
        } else {

            if ($user) {
                $TrackRecord = new TrackReport;
                $joinedDate = new \DateTime();

                $TrackRecord->setJoinedDate($joinedDate);
                $TrackRecord->setOverallRating(0);
                $TrackRecord->setTotalWeight(0);
                $TrackRecord->setUserId($userId);
                $initialArray = array();
                $TrackRecord->setComments($initialArray);
                $TrackRecord->setEventHistory($initialArray);
                $TrackRecord->setWorkshopsAttended($initialArray);
                $TrackRecord->setProjectHistory($initialArray);

                $em = $this->getDoctrine()->getEntityManager();
                $em->persist($TrackRecord);
                $em->flush();

                return $this->redirect($this->generateUrl('confirm'));
            } else {
                return new Response('User Not Found!!!');
            }
        }
    }

}