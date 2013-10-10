<?php
 
namespace VolunteerManagementSystem\PagesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use VolunteerManagementSystem\PagesBundle\Form\Type\AdminType;
use VolunteerManagementSystem\PagesBundle\Form\Type\VolunteerType;
use VolunteerManagementSystem\RegistrationBundle\Entity\User;
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
        
        return $this->render(
            'VolunteerManagementSystemPagesBundle:Admin:management.html.twig',
            array('form1' => $form1->createView(), 'form2' => $form2->createView(),'id'=>$id)
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
