<?php

namespace MovieAppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;




class DefaultController extends Controller
{
    public function indexAction()
    {

        $em = $this->getDoctrine()->getManager();

        $categories = $em->getRepository('MovieAppBundle:Category')->findAll();

        $movies = $em->getRepository('MovieAppBundle:Movie')->findBy(
            array(),
            array('created_at' => 'DESC'),
            20
        );

        return $this->render('MovieAppBundle:Default:index.html.twig', array(
            'categories' => $categories,
            'movies'     => $movies
        ));
    }
}
