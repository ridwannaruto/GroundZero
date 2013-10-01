<?php

namespace VolunteerManagementSystem\RegistrationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use VolunteerManagementSystem\RegistrationBundle\Session\Login;

class LoginController extends Controller
{
    public function loginAction(Request $request)
    {   $session=$this->getRequest()->getSession();
       if($request->getMethod()=='POST'){
        
          $session->clear();
            $username= $request->get('username');
            $password= $request->get('password');
            $remember= $request->get('remember');
        $em =$this->getDoctrine()->getEntityManager();
        $repository =$em->getRepository('VolunteerManagementSystemRegistrationBundle:User');
        
        $user = $repository->findOneBy(array('username'=>$username,'password'=>$password));
        
        if($user){
            if($remember=='on'){
               
                $login=new Login();
                $login->setUsername($username);
                $login->setPassword($password);
                $session->set('login', $login);
            }
           return $this->render('VolunteerManagementSystemPagesBundle:Homepage:homepage.html.twig', array('fname' => $user-> getFirstname(),'lname' => $user->getLastname(),'email' => $user->getEmail(),'gender' => $user->getGender(),'phone' => $user->getPhoneNumber()));
        }
        else{
            return $this->render('VolunteerManagementSystemRegistrationBundle:Login:login.html.twig', array('name' => 'login failed'));
        }
       }else{
           if($session->has('login')){
               $login= $session->get('login');
               $username= $login->getUsername();
            $password= $login->getPassword();
            
        $em =$this->getDoctrine()->getEntityManager();
        $repository =$em->getRepository('VolunteerManagementSystemRegistrationBundle:User');
        
        $user = $repository->findOneBy(array('username'=>$username,'password'=>$password));
        
        if($user){
             return $this->render('VolunteerManagementSystemPagesBundle:Homepage:homepage.html.twig', array('fname' => $user-> getFirstname(),'lname' => $user->getLastname(),'email' => $user->getEmail(),'gender' => $user->getGender(),'phone' => $user->getPhoneNumber()));
       
        }
               
           }
           return $this->render('VolunteerManagementSystemRegistrationBundle:Login:login.html.twig',array('name' => '') );
       }
    }
    public function logoutAction(){
        $session=$this->getRequest()->getSession();
        $session->clear();
        return $this->render('VolunteerManagementSystemRegistrationBundle:Login:login.html.twig',array('name' => '') );
    }
}
