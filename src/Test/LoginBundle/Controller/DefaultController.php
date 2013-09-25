<?php

namespace Test\LoginBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $username = 123456;
        $password = 123456;
        $database = $em->getRepository('TestLoginBundle:Login');
        $User = $database->findOneBy(array('username'=>$username,'password'=>$password));
        if ($User){
        return $this->render('TestLoginBundle:Default:index.html.twig', array('name' => $User->getFirstName()));
                
        }
        else {
            return $this->render('TestLoginBundle:Default:index.html.twig', array('name' => 'Login Failed'));
        }
    }

}

