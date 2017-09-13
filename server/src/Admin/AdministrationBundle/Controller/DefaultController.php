<?php

namespace Admin\AdministrationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AdminAdministrationBundle:Default:index.html.twig');
    }
}
