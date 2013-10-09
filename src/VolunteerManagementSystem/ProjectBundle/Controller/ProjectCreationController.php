<?php

namespace VolunteerManagementSystem\ProjectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use VolunteerManagementSystem\ProjectBundle\Form\ProjectType;
use VolunteerManagementSystem\ProjectBundle\Entity\Project;
use Symfony\Component\HttpFoundation\Request;


class ProjectCreationController extends Controller
{
    public function projectcreationAction(Request $request)
    {
        
        
        $id = $request->get('id');
        $Project = new Project();
        $form = $this->createForm(new ProjectType(),$Project,array(
            'action' => $this->generateUrl('projectsubmission', array('id'=> $id)),
        ));
        return $this->render(
            'VolunteerManagementSystemProjectBundle:ProjectCreation:projectcreation.html.twig',
            array('form' => $form->createView())
        );
        }
    
}


