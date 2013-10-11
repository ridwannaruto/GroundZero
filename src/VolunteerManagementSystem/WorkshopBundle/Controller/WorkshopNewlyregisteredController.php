<?php

namespace VolunteerManagementSystem\WorkshopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use VolunteerManagementSystem\WorkshopBundle\Form\Type\WorkshopType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class WorkshopNewlyregisteredController extends Controller{
   
    public function newlyregisteredAction(Request $request){
        $id = $request->get('id');
        $wid = $request->get('wid');
        $em = $this->getDoctrine()->getEntityManager();
        
        $repository = $em->getRepository('VolunteerManagementSystemWorkshopBundle:Workshop');
        $workshop = $repository->findOneBy(array('id'=>$wid));
        $array= $workshop->getRegisteredlist();
        $array[]=$id;
        $workshop->setRegisteredlist($array);
        $em->persist($workshop);
        $em->flush();
        
        return new Response("You have successfully registered for this workshop");
        }    
}
?>
