<?php

namespace Clinique\PatientBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CliniquePatientBundle:Default:index.html.twig');
    }
}
