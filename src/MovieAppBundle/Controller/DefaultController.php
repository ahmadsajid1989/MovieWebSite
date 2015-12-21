<?php

namespace MovieAppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MovieAppBundle:Default:index.html.twig');
    }
}
