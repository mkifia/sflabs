<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class HelloController extends Controller
{
    /**
     *
     * @Route("/hello/{name}", name="hello")
     *
     */
    
    public function indexAction($name) {
        return $this->render('hello/index.html.twig', array('name' => $name));
    }
}
