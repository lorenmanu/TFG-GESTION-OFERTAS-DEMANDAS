<?php

namespace VisitasMesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('VisitasMesBundle:Default:index.html.twig');
    }
}
