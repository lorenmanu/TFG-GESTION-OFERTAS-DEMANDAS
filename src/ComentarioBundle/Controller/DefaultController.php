<?php

namespace ComentarioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ComentarioBundle:Default:index.html.twig');
    }
}
