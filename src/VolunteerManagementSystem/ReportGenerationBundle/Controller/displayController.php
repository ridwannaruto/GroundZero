<?php

namespace VolunteerManagementSystem\ReportGenerationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use VolunteerManagementSystem\ReportGenerationBundle\Form\Type\userDetailsType;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class displayController extends Controller{
   
    public function displayAction(Request $request){
 
        $form = $this->createForm(new userDetailsType());
        $form->handleRequest($request);
        
        if ($form->isValid()) {
            $data = $form->getData();
            $userId = $data['id']->getId();
            
            $em1 = $this->getDoctrine()->getEntityManager();
            $em2 = $this->getDoctrine()->getEntityManager();

            $UserRepository = $em1->getRepository('VolunteerManagementSystemRegistrationBundle:User');
            $TrackRepository = $em2->getRepository('VolunteerManagementSystemReportGenerationBundle:TrackReport');
            $user = $UserRepository->findOneBy(array('id' => $userId));
            $trackRecord = $TrackRepository->findOneBy(array('userId' => $userId));
            
            if ($user){
                 
                return $this->render('VolunteerManagementSystemReportGenerationBundle:display:userDetails.html.twig', array('id'=>$request->get('id'),'user' => $user,'trackrecord'=>$trackRecord));
            }
            
            
        }
        
         
        
    }
}

?>
