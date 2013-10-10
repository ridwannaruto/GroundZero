<?php

namespace VolunteerManagementSystem\ReportGenerationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class OverallReportController extends Controller {

    public function OverallReportAction(Request $request) {
        $em = $this->getDoctrine()->getEntityManager();
        $UserRepository = $em->getRepository('VolunteerManagementSystemRegistrationBundle:User');
        $ProjectRepository = $em->getRepository('VolunteerManagementSystemProjectBundle:Project');
        $EventRepository = $em->getRepository('VolunteerManagementSystemEventBundle:Event');
        $WorkshopRepository = $em->getRepository('VolunteerManagementSystemWorkshopBundle:Workshop');


        $noOfUsers = count($UserRepository->findAll());
        $noOfProjects = count($ProjectRepository->findAll());
        $noOfEvents = count($EventRepository->findAll());
        $noOfWorkshops = count($WorkshopRepository->findAll());


        $noOfMaleUsers = count($UserRepository->findByGender('m'));

        $ongoingProjects = $em->createQuery(
                        'SELECT p
                        FROM VolunteerManagementSystemProjectBundle:Project p
                        WHERE p.enddate is NULL'
                        
                );
        $noOfOngoingProjects = count($ongoingProjects->getResult());
        
        $ongoingEvents= $em->createQuery(
                        'SELECT e
                        FROM VolunteerManagementSystemEventBundle:Event e
                        WHERE e.enddate is NULL'
                        
                );
        
        $noOfOngoingEvents= count($ongoingEvents->getResult());
            

        return $this->render('VolunteerManagementSystemReportGenerationBundle:OverallReport:OverallReport.html.twig', $parameters=array('id'=>$request-> get('id'),'noofusers'=>$noOfUsers,'noofmales'=>$noOfMaleUsers,'noofprojects'=>$noOfProjects,'noofongoingprojects'=>$noOfOngoingProjects,'ongoingprojects'=>$ongoingProjects->getResult(),'noofevents'=>$noOfEvents, 'noofongoingevents'=>$noOfOngoingEvents, 'ongoingevents'=>$ongoingEvents->getResult()));
    }

}
