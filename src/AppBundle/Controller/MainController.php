<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

/**
* 
*/
class MainController extends Controller
{
    /**
     * @Route("/home/{_locale}", defaults={"_locale": "en"}, requirements={
     *  "_locale": "en|fr"}, name="home")
     */
    
    public function homepageAction($_locale)
    {
        return new Response("<html><body><h1>Homepage</h1>$_locale</body></html>");
    }

    /**
     *
     * @Route("/api/posts/{id}")
     * @Method({"GET", "HEAD"})
     */
    public function showAction($id)
    {
        return new Response($id);
    }

    /**
     *
     * @Route("/api/posts/{id}")
     * @Method("PUT")
     */
    public function editAction($id)
    {
        return new Response($id);
    }
}
