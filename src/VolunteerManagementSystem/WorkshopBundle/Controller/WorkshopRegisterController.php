<?php

namespace VolunteerManagementSystem\WorkshopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Request;

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
       
        if($workshop){
            
        }
        
        
        }
}

?>
