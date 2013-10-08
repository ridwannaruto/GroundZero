<?php

namespace VolunteerManagementSystem\NotificationBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class EmailController extends Controller
{
    public function sendAction()
    {
        $message = \Swift_Message::newInstance()
        ->setSubject('Hello Email')
        ->setFrom('rshariffdeen@gmail.com')
        ->setTo('rshariffdeen@gmail.com')
        ->setBody(
            $this->renderView(
                'VolunteerManagementSystemNotificationBundle:Email:email.html.twig',
                array('name' => 'Naruto')
            )
        )
    ;
    $this->get('mailer')->send($message);

   
        return $this->render('VolunteerManagementSystemNotificationBundle:Email:email.html.twig', array('name' => 'Ridwan'));
    }
}
