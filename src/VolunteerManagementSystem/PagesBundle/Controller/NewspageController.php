<?php

namespace VolunteerManagementSystem\PagesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class NewspageController extends Controller{
    
    public function newsAction(Request $request){
         $id = $request->get('id');
        $em = $this->getDoctrine()->getEntityManager();
        $repository = $em->getRepository('VolunteerManagementSystemRegistrationBundle:User');

        $user = $repository->findOneBy(array('id' => $id));
        if($user){
            $stmt = $this->getDoctrine()->getEntityManager()
                        ->getConnection()
                        ->prepare('select * from news where id > ((select COUNT(*) from news) - 10) order by id DESC');
                        $stmt->execute();
           $result = $stmt->fetchAll();
          
       if($user->getAccessLevel()=='Volunteer'){
           return $this->render('VolunteerManagementSystemPagesBundle:Newspage:newspage.html.twig', array('id' => $id,'result'=>$result));
           }
           if($user->getAccessLevel()=='Admin'){
           return $this->render('VolunteerManagementSystemPagesBundle:Newspage:newspageadmin.html.twig', array('id' => $id,'result'=>$result));
           } }
        else{
            
            return $this->render('VolunteerManagementSystemRegistrationBundle:Login:login.html.twig');
        }
    }
    
}

?>
