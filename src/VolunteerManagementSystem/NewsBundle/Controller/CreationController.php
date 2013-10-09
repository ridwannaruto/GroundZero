<?php

namespace VolunteerManagementSystem\NewsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use VolunteerManagementSystem\NewsBundle\Form\Type\NewsType;
use VolunteerManagementSystem\NewsBundle\Entity\News;


class CreationController extends Controller
{
    public function createAction(Request $request)
    {
        $id = $request->get('id');
        $form = $this->createForm(new NewsType(), new News(), array(
            'action' => $this->generateUrl('news_create_confirm',array('id'=>$id)),
        ));
      
        return $this->render(
            'VolunteerManagementSystemNewsBundle:CreateNews:createnews.html.twig',
            array('form' => $form->createView(),'id' => $id)
        );
        
    }
}
