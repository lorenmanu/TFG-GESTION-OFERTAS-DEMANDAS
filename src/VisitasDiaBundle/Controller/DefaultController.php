<?php

namespace VisitasDiaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('VisitasDiaBundle:Default:index.html.twig');
    }
}
