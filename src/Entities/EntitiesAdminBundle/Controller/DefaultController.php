<?php

namespace Entities\EntitiesAdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EntitiesEntitiesAdminBundle:Default:index.html.twig');
    }
}
