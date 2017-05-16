<?php

namespace DemandaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('DemandaBundle:Default:index.html.twig');
    }
}
