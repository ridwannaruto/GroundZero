<?php
 
namespace VolunteerManagementSystem\PagesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use VolunteerManagementSystem\PagesBundle\Form\Type\AdminType;
use VolunteerManagementSystem\PagesBundle\Form\Type\VolunteerType;
use VolunteerManagementSystem\PagesBundle\Form\Type\ProjectNameType;
use VolunteerManagementSystem\ReportGenerationBundle\Form\Type\userDetailsType;
use VolunteerManagementSystem\RegistrationBundle\Entity\User;
use VolunteerManagementSystem\ProjectBundle\Entity\Project;
use Symfony\Component\HttpFoundation\Request;

class AdminManagementController extends Controller{
   
    public function selectionAction(Request $request){
        $id = $request->get('id');
        $em = $this->getDoctrine()->getEntityManager();
        $repository = $em->getRepository('VolunteerManagementSystemRegistrationBundle:User');
   
        $user = $repository->findOneBy(array('id' => $id));
        if($user){
           if($user->getAccessLevel()=='Admin'){
        $form1 = $this->createForm(new AdminType(), new User(),array(
            'action' => $this->generateUrl('promote_to_admin',array('id'=>$id)),
        ));   
        
        $form2 = $this->createForm(new VolunteerType(), new User(),array(
            'action' => $this->generateUrl('demote_to_volunteer',array('id'=>$id)),
        ));   
        
        $form3 = $this->createForm(new ProjectNameType(), new Project(),array(
            'action' => $this->generateUrl('_project_report',array('id'=>$id)),
        ));   
        
        $form4 = $this->createForm(new userDetailsType(), new User(),array(
            'action' => $this->generateUrl('_display',array('id'=>$id)),
        ));
        
        return $this->render(
            'VolunteerManagementSystemPagesBundle:Admin:management.html.twig',
            array('form1' => $form1->createView(), 'form2' => $form2->createView(), 'form3' => $form3->createView(), 'form4' => $form4->createView(),'id'=>$id)
        );
           }
        return $this->render('VolunteerManagementSystemPagesBundle:Error:adminerror.html.twig', array('id' => $id));
           
        }
         else{
            
            return $this->render('VolunteerManagementSystemRegistrationBundle:Login:login.html.twig');
        }   
    }
}
?>
