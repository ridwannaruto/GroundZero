<?php

namespace VolunteerManagementSystem\ReportGenerationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
Use VolunteerManagementSystem\ProjectBundle\Entity\Project;

class ProjectReportController extends Controller
{
    public function ProjectReportAction(Request $request)
    {
        $request->get('projectId');
        $em = $this->getDoctrine()->getEntityManager();
        $ProjectRepository = $em->getRepository('VolunteerManagementSystemProjectBundle:Project');
        
        
        
    }

}
