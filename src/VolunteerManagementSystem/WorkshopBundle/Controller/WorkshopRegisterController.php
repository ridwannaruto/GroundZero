<?php

namespace VolunteerManagementSystem\WorkshopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use VolunteerManagementSystem\WorkshopBundle\Entity\Workshop;
use Symfony\Component\HttpFoundation\Request;
use VolunteerManagementSystem\WorkshopBundle\Form\Type\WorkshopRegisterType;

class WorkshopRegisterController extends Controller
{
    public function workshopregisterAction(Request $request)
    {   
        $wid=$request->get('wid');
        $id=$request->get('id');
        $em =$this->getDoctrine()->getEntityManager();
        $repository =$em->getRepository('VolunteerManagementSystemWorkshopBundle:Workshop');
        $repository2 =$em->getRepository('VolunteerManagementSystemRegistrationBundle:User');
        
        $workshop = $repository->findOneBy(array('id'=>$wid));
        $volunteers = $workshop->getSelectedlist();
        if($volunteers==null){
            $volunteers=array();
        }
        
       if(in_array($id, $volunteers)){
            return $this->render(
                    'VolunteerManagementSystemWorkshopBundle:workshop:alreadyregistered.html.twig',
                    array('id' => $id, 'wid' => $wid))
                    ;
       }     
       else{
            $form = $this->createForm(new WorkshopRegisterType(), new Workshop(), array(
                    'action' => $this->generateUrl('workshop_newly_register',array('id'=>$id, 'wid' => $wid)),
            ));
            return $this->render(
                'VolunteerManagementSystemWorkshopBundle:workshop:register.html.twig',
            array('form' => $form->createView(), 'id' => $id, 'wid' => $wid))
            ;
            }
        
       }


}
?>
