<?php
 
namespace VolunteerManagementSystem\PagesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Request;
use VolunteerManagementSystem\PagesBundle\Form\Type\AdminType;
use VolunteerManagementSystem\NotificationBundle\Entity\Notification;

class PromoteAdminController extends Controller{
   
    public function promotetoadminAction(Request $request){
           
        $em = $this->getDoctrine()->getEntityManager();
        
        $form = $this->createForm(new AdminType());
        $idu = $request->get('id');
        $form->handleRequest($request);
        
        if ($form->isValid()) {
            $newadmin = $form->getData();
            $name = $newadmin['id']->getFirstname();
            $id = $newadmin['id']->getId();
            $this->getDoctrine()->getEntityManager()
                                ->getConnection()
                                ->update('user', array('accesslevel' => 'Admin'), array('id' => $id));
            
            $notification = new Notification;
            $notification->setName('Promoted to Admin');
            $notification->setDetails('You have been promoted to an admin');
            $notification->setDate(new \DateTime());
            $notification->setUserId($id);
            $notification->setProject('-');
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($notification);
            $em->flush();
            
            
            
           return $this->render('VolunteerManagementSystemPagesBundle:Promote:success.html.twig',array('id' => $idu, 'name' => $name));
        }
        
           return $this->render('VolunteerManagementSystemPagesBundle:Promote:error.html.twig', array('id'=>$idu,'form' => $form->createView()));
        
    }
}

?>
