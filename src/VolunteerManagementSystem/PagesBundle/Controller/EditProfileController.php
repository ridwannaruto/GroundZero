<?php

namespace VolunteerManagementSystem\PagesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use VolunteerManagementSystem\PagesBundle\Form\Type\PasswordType;
use VolunteerManagementSystem\PagesBundle\Form\Type\UserNameType;
use VolunteerManagementSystem\PagesBundle\Form\Type\NameType;
use VolunteerManagementSystem\PagesBundle\Form\Type\DOBType;
use VolunteerManagementSystem\PagesBundle\Form\Type\EmailType;
use VolunteerManagementSystem\PagesBundle\Form\Type\GenderType;
use VolunteerManagementSystem\PagesBundle\Form\Type\NICType;
use VolunteerManagementSystem\PagesBundle\Form\Type\MobileNumbType;
use VolunteerManagementSystem\PagesBundle\Form\Type\AddressType;
use VolunteerManagementSystem\PagesBundle\Form\Type\ContactNumbType;

class EditProfileController extends Controller
{
    public function editUserNameAction()
    {   
        $session=$this->getRequest()->getSession();
            if($session->has('user')){
                   $user= $session->get('user');
                   $em = $this->getDoctrine()->getEntityManager();
                   $entity = $em->getRepository('VolunteerManagementSystemRegistrationBundle:User')->find($user->getId());
                   $form = $this->createForm(new UserNameType(), $entity, array('action' => $this->generateUrl('save_UserName'),));

                   return $this->render('VolunteerManagementSystemPagesBundle:Profilepage:editUserName.html.twig', array('id' => $user->getId(),'user'=>$user,'form'   => $form->createView()));

            }else{
            return $this->render('VolunteerManagementSystemRegistrationBundle:Login:login.html.twig',array('id' => '') ); 
        }
    }
    public function editPasswordAction()
    {   
        $session=$this->getRequest()->getSession();
            if($session->has('user')){
                   $user= $session->get('user');
                   $em = $this->getDoctrine()->getEntityManager();
                   $entity = $em->getRepository('VolunteerManagementSystemRegistrationBundle:User')->find($user->getId());
                   $form = $this->createForm(new PasswordType(), $entity, array('action' => $this->generateUrl('save_Password'),));

                   return $this->render('VolunteerManagementSystemPagesBundle:Profilepage:editPassword.html.twig', array('id' => $user->getId(),'user'=>$user,'form'   => $form->createView()));

            }else{
            return $this->render('VolunteerManagementSystemRegistrationBundle:Login:login.html.twig',array('id' => '') ); 
        }
    }
    public function editNICAction()
    {   
        $session=$this->getRequest()->getSession();
            if($session->has('user')){
                   $user= $session->get('user');
                   $em = $this->getDoctrine()->getEntityManager();
                   $entity = $em->getRepository('VolunteerManagementSystemRegistrationBundle:User')->find($user->getId());
                   $form = $this->createForm(new NICType(), $entity, array('action' => $this->generateUrl('save_NIC'),));

                   return $this->render('VolunteerManagementSystemPagesBundle:Profilepage:editNIC.html.twig', array('id' => $user->getId(),'user'=>$user,'form'   => $form->createView()));

            }else{
            return $this->render('VolunteerManagementSystemRegistrationBundle:Login:login.html.twig',array('id' => '') ); 
        }
    }
   public function editGenderAction()
    {   
        $session=$this->getRequest()->getSession();
            if($session->has('user')){
                   $user= $session->get('user');
                   $em = $this->getDoctrine()->getEntityManager();
                   $entity = $em->getRepository('VolunteerManagementSystemRegistrationBundle:User')->find($user->getId());
                   $form = $this->createForm(new GenderType(), $entity, array('action' => $this->generateUrl('save_Gender'),));

                   return $this->render('VolunteerManagementSystemPagesBundle:Profilepage:editGender.html.twig', array('id' => $user->getId(),'user'=>$user,'form'   => $form->createView()));

            }else{
            return $this->render('VolunteerManagementSystemRegistrationBundle:Login:login.html.twig',array('id' => '') ); 
        }
    }
    public function editDOBAction()
    {   
        $session=$this->getRequest()->getSession();
            if($session->has('user')){
                   $user= $session->get('user');
                   $em = $this->getDoctrine()->getEntityManager();
                   $entity = $em->getRepository('VolunteerManagementSystemRegistrationBundle:User')->find($user->getId());
                   $form = $this->createForm(new DOBType(), $entity, array('action' => $this->generateUrl('save_DOB'),));

                   return $this->render('VolunteerManagementSystemPagesBundle:Profilepage:editDOB.html.twig', array('id' => $user->getId(),'user'=>$user,'form'   => $form->createView()));

            }else{
            return $this->render('VolunteerManagementSystemRegistrationBundle:Login:login.html.twig',array('id' => '') ); 
        }
    }
    public function editEmailAction()
    {   
        $session=$this->getRequest()->getSession();
            if($session->has('user')){
                   $user= $session->get('user');
                   $em = $this->getDoctrine()->getEntityManager();
                   $entity = $em->getRepository('VolunteerManagementSystemRegistrationBundle:User')->find($user->getId());
                   $form = $this->createForm(new EmailType(), $entity, array('action' => $this->generateUrl('save_Email'),));

                   return $this->render('VolunteerManagementSystemPagesBundle:Profilepage:editEmail.html.twig', array('id' => $user->getId(),'user'=>$user,'form'   => $form->createView()));

            }else{
            return $this->render('VolunteerManagementSystemRegistrationBundle:Login:login.html.twig',array('id' => '') ); 
        }
    }
    public function editMobileNumbAction()
    {   
        $session=$this->getRequest()->getSession();
            if($session->has('user')){
                   $user= $session->get('user');
                   $em = $this->getDoctrine()->getEntityManager();
                   $entity = $em->getRepository('VolunteerManagementSystemRegistrationBundle:User')->find($user->getId());
                   $form = $this->createForm(new MobileNumbType(), $entity, array('action' => $this->generateUrl('save_MobileNumb'),));

                   return $this->render('VolunteerManagementSystemPagesBundle:Profilepage:editMobileNumb.html.twig', array('id' => $user->getId(),'user'=>$user,'form'   => $form->createView()));

            }else{
            return $this->render('VolunteerManagementSystemRegistrationBundle:Login:login.html.twig',array('id' => '') ); 
        }
    }
    public function editNameAction()
    {   
        $session=$this->getRequest()->getSession();
            if($session->has('user')){
                   $user= $session->get('user');
                   $em = $this->getDoctrine()->getEntityManager();
                   $entity = $em->getRepository('VolunteerManagementSystemRegistrationBundle:User')->find($user->getId());
                   $form = $this->createForm(new NameType(), $entity, array('action' => $this->generateUrl('save_Name'),));

                   return $this->render('VolunteerManagementSystemPagesBundle:Profilepage:editName.html.twig', array('id' => $user->getId(),'user'=>$user,'form'   => $form->createView()));

            }else{
            return $this->render('VolunteerManagementSystemRegistrationBundle:Login:login.html.twig',array('id' => '') ); 
        }
    }
    public function editContactNumbAction()
    {   
        $session=$this->getRequest()->getSession();
            if($session->has('user')){
                   $user= $session->get('user');
                   $em = $this->getDoctrine()->getEntityManager();
                   $entity = $em->getRepository('VolunteerManagementSystemRegistrationBundle:User')->find($user->getId());
                   $form = $this->createForm(new ContactNumbType(), $entity, array('action' => $this->generateUrl('save_ContactNumb'),));

                   return $this->render('VolunteerManagementSystemPagesBundle:Profilepage:editContactNumb.html.twig', array('id' => $user->getId(),'user'=>$user,'form'   => $form->createView()));

            }else{
            return $this->render('VolunteerManagementSystemRegistrationBundle:Login:login.html.twig',array('id' => '') ); 
        }
    }
   public function editAddressAction()
    {   
        $session=$this->getRequest()->getSession();
            if($session->has('user')){
                   $user= $session->get('user');
                   $em = $this->getDoctrine()->getEntityManager();
                   $entity = $em->getRepository('VolunteerManagementSystemRegistrationBundle:User')->find($user->getId());
                   $form = $this->createForm(new AddressType(), $entity, array('action' => $this->generateUrl('save_Address'),));

                   return $this->render('VolunteerManagementSystemPagesBundle:Profilepage:editAddress.html.twig', array('id' => $user->getId(),'user'=>$user,'form'   => $form->createView()));

            }else{
            return $this->render('VolunteerManagementSystemRegistrationBundle:Login:login.html.twig',array('id' => '') ); 
        }
    }
    
}
