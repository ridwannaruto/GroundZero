<?php

namespace VolunteerManagementSystem\ReportGenerationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use VolunteerManagementSystem\ProjectBundle\Entity\Project;
use VolunteerManagementSystem\PagesBundle\Form\Type\ProjectNameType;


class ProjectReportController extends Controller {

    public function ProjectReportAction(Request $request) {
        
        $form = $this->createForm(new ProjectNameType());
        $form->handleRequest($request);

        if ($form->isValid()) {    
            $data = $form->getData();
            $projectId = $data['name']->getId();          
        }
        else{
            return new Response("Project Id not valid");
        }
        $id=$request->get('id');
        $em = $this->getDoctrine()->getEntityManager();
        $ProjectRepository = $em->getRepository('VolunteerManagementSystemProjectBundle:Project');

        $project = $ProjectRepository->findOneBy(array('id' => $projectId));

       

        if ($project->getEnddate()!=NULL) { 
            $status = "Finished";
        }else{
            $status = "Ongoing";
        }
            
         

        if ($project) {

            return $this->render('VolunteerManagementSystemReportGenerationBundle:ProjectReport:ProjectReport.html.twig', array('projectname' => $project->getName(), 'description' => $project->getDescription(), 'startdate' => $project->getStartdate(), 'enddate' => $project->getEnddate(), 'projectmanager' => $project->getProjectmanager(), 'objectives' => $project->getObjectives(), 'status' => $status,'id'=>$id));
        } else {
            return new Response('Project not found!!!');
        }
    }

}
