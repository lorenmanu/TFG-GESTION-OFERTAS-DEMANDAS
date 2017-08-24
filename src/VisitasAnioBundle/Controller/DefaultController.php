<?php

namespace VisitasAnioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('VisitasAnioBundle:Default:index.html.twig');
    }
}
