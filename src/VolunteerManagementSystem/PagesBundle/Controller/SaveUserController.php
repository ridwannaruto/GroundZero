<?php

namespace VolunteerManagementSystem\PagesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use VolunteerManagementSystem\PagesBundle\Form\Type\UserNameType;
use VolunteerManagementSystem\PagesBundle\Form\Type\PasswordType;
use VolunteerManagementSystem\PagesBundle\Form\Type\NameType;
use VolunteerManagementSystem\PagesBundle\Form\Type\DOBType;
use VolunteerManagementSystem\PagesBundle\Form\Type\EmailType;
use VolunteerManagementSystem\PagesBundle\Form\Type\GenderType;
use VolunteerManagementSystem\PagesBundle\Form\Type\NICType;
use VolunteerManagementSystem\PagesBundle\Form\Type\MobileNumbType;
use VolunteerManagementSystem\PagesBundle\Form\Type\AddressType;
use VolunteerManagementSystem\PagesBundle\Form\Type\ContactNumbType;

class SaveUserController extends Controller {

    public function saveUserNameAction(Request $request) {
        $em = $this->getDoctrine()->getEntityManager();
        $session=$this->getRequest()->getSession();
        $user= $session->get('user'); 
        $entity = $em->getRepository('VolunteerManagementSystemRegistrationBundle:User')->find($user->getId());
        $form = $this->createForm(new UserNameType(), $entity);
        $form->handleRequest($request);
        
                if ($form->isValid()) {
                    $em->persist($entity);
                        try {
                            $em->flush();
                        } catch (\Exception $e) {
                            return $this->render('VolunteerManagementSystemPagesBundle:Profilepage:editprofile.html.twig', array('form' => $form->createView(),'id' => $user->getId()));
                        }
                        $user = $entity;
                        $session->set('user', $user);
                    return $this->redirect($this->generateUrl('profile',$paramters = array('id' => $user->getId())));
                }
        
         return $this->render('VolunteerManagementSystemRegistrationBundle:Error:.html.twig', array('form' => $form->createView()));
           
    }
    
    public function savePasswordAction(Request $request) {
        $em = $this->getDoctrine()->getEntityManager();
        $session=$this->getRequest()->getSession();
        $user= $session->get('user'); 
        $entity = $em->getRepository('VolunteerManagementSystemRegistrationBundle:User')->find($user->getId());
        $form = $this->createForm(new PasswordType(), $entity);
        $form->handleRequest($request);
        
                if ($form->isValid()) {
                    $em->persist($entity);
                        try {
                            $em->flush();
                        } catch (\Exception $e) {
                            
                        }
                    $user = $entity;
                    $session->set('user', $user);
                    return $this->redirect($this->generateUrl('profile',$paramters = array('id' => $user->getId())));
                }
        
         return $this->render('VolunteerManagementSystemRegistrationBundle:Error:.html.twig', array('form' => $form->createView()));
           
    }
    public function saveNameAction(Request $request) {
        $em = $this->getDoctrine()->getEntityManager();
        $session=$this->getRequest()->getSession();
        $user= $session->get('user'); 
        $entity = $em->getRepository('VolunteerManagementSystemRegistrationBundle:User')->find($user->getId());
        $form = $this->createForm(new NameType(), $entity);
        $form->handleRequest($request);
        
                if ($form->isValid()) {
                    $em->persist($entity);
                        try {
                            $em->flush();
                        } catch (\Exception $e) {
                            
                        }
                    $user = $entity;
                    $session->set('user', $user);
                    return $this->redirect($this->generateUrl('profile',$paramters = array('id' => $user->getId())));
                }
        
         return $this->render('VolunteerManagementSystemRegistrationBundle:Error:.html.twig', array('form' => $form->createView()));
           
    }
    public function saveNICAction(Request $request) {
        $em = $this->getDoctrine()->getEntityManager();
        $session=$this->getRequest()->getSession();
        $user= $session->get('user'); 
        $entity = $em->getRepository('VolunteerManagementSystemRegistrationBundle:User')->find($user->getId());
        $form = $this->createForm(new NICType(), $entity);
        $form->handleRequest($request);
        
                if ($form->isValid()) {
                    $em->persist($entity);
                        try {
                            $em->flush();
                        } catch (\Exception $e) {
                            
                        }
                    $user = $entity;
                    $session->set('user', $user);
                    return $this->redirect($this->generateUrl('profile',$paramters = array('id' => $user->getId())));
                }
        
         return $this->render('VolunteerManagementSystemRegistrationBundle:Error:.html.twig', array('form' => $form->createView()));
           
    }
    public function saveDOBAction(Request $request) {
        $em = $this->getDoctrine()->getEntityManager();
        $session=$this->getRequest()->getSession();
        $user= $session->get('user'); 
        $entity = $em->getRepository('VolunteerManagementSystemRegistrationBundle:User')->find($user->getId());
        $form = $this->createForm(new DOBType(), $entity);
        $form->handleRequest($request);
        
                if ($form->isValid()) {
                    $em->persist($entity);
                        try {
                            $em->flush();
                        } catch (\Exception $e) {
                            
                        }
                    $user = $entity;
                    $session->set('user', $user);
                    return $this->redirect($this->generateUrl('profile',$paramters = array('id' => $user->getId())));
                }
        
         return $this->render('VolunteerManagementSystemRegistrationBundle:Error:.html.twig', array('form' => $form->createView()));
           
    }
    public function saveEmailAction(Request $request) {
        $em = $this->getDoctrine()->getEntityManager();
        $session=$this->getRequest()->getSession();
        $user= $session->get('user'); 
        $entity = $em->getRepository('VolunteerManagementSystemRegistrationBundle:User')->find($user->getId());
        $form = $this->createForm(new EmailType(), $entity);
        $form->handleRequest($request);
        
                if ($form->isValid()) {
                    $em->persist($entity);
                        try {
                            $em->flush();
                        } catch (\Exception $e) {
                            
                        }
                    $user = $entity;
                    $session->set('user', $user);
                    return $this->redirect($this->generateUrl('profile',$paramters = array('id' => $user->getId())));
                }
        
         return $this->render('VolunteerManagementSystemRegistrationBundle:Error:.html.twig', array('form' => $form->createView()));
           
    }
    public function saveGenderAction(Request $request) {
        $em = $this->getDoctrine()->getEntityManager();
        $session=$this->getRequest()->getSession();
        $user= $session->get('user'); 
        $entity = $em->getRepository('VolunteerManagementSystemRegistrationBundle:User')->find($user->getId());
        $form = $this->createForm(new GenderType(), $entity);
        $form->handleRequest($request);
        
                if ($form->isValid()) {
                    $em->persist($entity);
                        try {
                            $em->flush();
                        } catch (\Exception $e) {
                            
                        }
                    $user = $entity;
                    $session->set('user', $user);
                    return $this->redirect($this->generateUrl('profile',$paramters = array('id' => $user->getId())));
                }
        
         return $this->render('VolunteerManagementSystemRegistrationBundle:Error:.html.twig', array('form' => $form->createView()));
           
    }
    public function saveMobileNumbAction(Request $request) {
        $em = $this->getDoctrine()->getEntityManager();
        $session=$this->getRequest()->getSession();
        $user= $session->get('user'); 
        $entity = $em->getRepository('VolunteerManagementSystemRegistrationBundle:User')->find($user->getId());
        $form = $this->createForm(new MobileNumbType(), $entity);
        $form->handleRequest($request);
        
                if ($form->isValid()) {
                    $em->persist($entity);
                        try {
                            $em->flush();
                        } catch (\Exception $e) {
                            
                        }
                    $user = $entity;
                    $session->set('user', $user);
                    return $this->redirect($this->generateUrl('profile',$paramters = array('id' => $user->getId())));
                }
        
         return $this->render('VolunteerManagementSystemRegistrationBundle:Error:.html.twig', array('form' => $form->createView()));
           
    }
     public function saveContactNumbAction(Request $request) {
        $em = $this->getDoctrine()->getEntityManager();
        $session=$this->getRequest()->getSession();
        $user= $session->get('user'); 
        $entity = $em->getRepository('VolunteerManagementSystemRegistrationBundle:User')->find($user->getId());
        $form = $this->createForm(new ContactNumbType(), $entity);
        $form->handleRequest($request);
        
                if ($form->isValid()) {
                    $em->persist($entity);
                        try {
                            $em->flush();
                        } catch (\Exception $e) {
                            
                        }
                    $user = $entity;
                    $session->set('user', $user);
                    return $this->redirect($this->generateUrl('profile',$paramters = array('id' => $user->getId())));
                }
        
         return $this->render('VolunteerManagementSystemRegistrationBundle:Error:.html.twig', array('form' => $form->createView()));
           
    }
     public function saveAddressAction(Request $request) {
        $em = $this->getDoctrine()->getEntityManager();
        $session=$this->getRequest()->getSession();
        $user= $session->get('user'); 
        $entity = $em->getRepository('VolunteerManagementSystemRegistrationBundle:User')->find($user->getId());
        $form = $this->createForm(new AddressType(), $entity);
        $form->handleRequest($request);
        
                if ($form->isValid()) {
                    $em->persist($entity);
                        try {
                            $em->flush();
                        } catch (\Exception $e) {
                            return $this->redirect($this->generateUrl('profile',$paramters = array('id' => $user->getId())));
                        }
                    $user = $entity;
                    $session->set('user', $user);
                    return $this->redirect($this->generateUrl('profile',$paramters = array('id' => $user->getId())));
                }
        
         return $this->render('VolunteerManagementSystemRegistrationBundle:Error:.html.twig', array('form' => $form->createView()));
           
    }

}

?>
