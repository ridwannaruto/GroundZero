<?php

namespace VolunteerManagementSystem\ProjectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Request;
use VolunteerManagementSystem\ProjectBundle\Form\ProjectType;
use VolunteerManagementSystem\ProjectBundle\Entity\Project;

class ProjectSubmissionController extends Controller
{
    public function projectsubmissionAction(Request $request)
    {
      
        $em = $this->getDoctrine()->getEntityManager();
        $id = $request->get('id');
        $form = $this->createForm(new ProjectType(), new Project());

        $form->handleRequest($request);
        
        
        if ($form->isValid()) {
        
        $Project = $form->getData();
        $Projectmanager=$Project->getProjectmanager();
        $projectmanagerid=$Projectmanager->getId();
        $Project->setProjectManager($projectmanagerid);
        $em->persist($Project);
        try{
            $em->flush();
        }
        catch(\Exception $e){
            return $this->render('VolunteerManagementSystemProjectBundle:projectsubmission:projectsubmission.html.twig', array('id' => $id,'form' => $form->createView()));
        }

        return $this->redirect($this->generateUrl('projectconfirmation',array('id'=>$id)));
        }

    return $this->render(
        'VolunteerManagementSystemProjectBundle:Error:error.html.twig',
       array('form' => $form->createView(),'id'=>$id)
    );
    }

}
