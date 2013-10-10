<?php
 
namespace VolunteerManagementSystem\PagesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Request;
use VolunteerManagementSystem\PagesBundle\Form\Type\AdminType;

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
            
           return $this->render('VolunteerManagementSystemPagesBundle:Promote:success.html.twig',array('id' => $idu, 'name' => $name));
        }
        
           return $this->render('VolunteerManagementSystemPagesBundle:Promote:error.html.twig', array('id'=>$idu,'form' => $form->createView()));
        
    }
}

?>
