<?php

namespace Entities\EntitiesCliniqueBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EntitiesEntitiesCliniqueBundle:Default:index.html.twig');
    }
}
