<?php

namespace VolunteerManagementSystem\ProjectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
class ConfirmController extends Controller
{
    public function confirmprojectCreationAction(Request $request)
    {
        $id = $request ->get('id');
        return $this->render('VolunteerManagementSystemProjectBundle:Confirm:confirmprojectcreation.html.twig',array('id'=>$id));
    }

}
