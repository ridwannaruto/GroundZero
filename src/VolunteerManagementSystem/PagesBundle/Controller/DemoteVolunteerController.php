<?php
 
namespace VolunteerManagementSystem\PagesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Request;
use VolunteerManagementSystem\PagesBundle\Form\Type\VolunteerType;
use VolunteerManagementSystem\NotificationBundle\Entity\Notification;

class DemoteVolunteerController extends Controller{
   
    public function demotetovolunteerAction(Request $request){
           
        $em = $this->getDoctrine()->getEntityManager();
        
        $form = $this->createForm(new VolunteerType());
        $idu = $request->get('id');
        $form->handleRequest($request);
        
        if ($form->isValid()) {
            $newvol = $form->getData();
            $id = $newvol['id']->getId();
            $name = $newvol['id']->getFirstname();
            $this->getDoctrine()->getEntityManager()
                                ->getConnection()
                                ->update('user', array('accesslevel' => 'Volunteer'), array('id' => $id));

            $notification = new Notification;
            $notification->setName('Demoted to volunteer');
            $notification->setDetails('You have been demoted to a volunteer');
            $notification->setDate(new \DateTime());
            $notification->setUserId($id);
            $notification->setProject('-');
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($notification);
            $em->flush();
        
            return $this->render('VolunteerManagementSystemPagesBundle:Demote:success.html.twig',array('id' => $idu, 'name'=>$name));
        }
        
           return $this->render('VolunteerManagementSystemPagesBundle:Demote:error.html.twig', array('id'=>$idu,'form' => $form->createView()));
        
    }
}

?>
