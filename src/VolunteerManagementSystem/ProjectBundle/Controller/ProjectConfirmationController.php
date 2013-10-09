<?php

namespace VolunteerManagementSystem\ProjectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
class ProjectConfirmationController extends Controller
{
    public function projectconfirmationAction(Request $request)
    {
        $id = $request ->get('id');
        return $this->render('VolunteerManagementSystemProjectBundle:ProjectConfirmation:projectconfirmation.html.twig',array('id'=>$id));
    }

}
