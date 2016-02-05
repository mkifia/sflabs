<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class BlogController extends Controller
{
    
    /**
     * @route("/blog/{page}", name="blog", defaults={"page" = 1}, requirements={
     *      "page": "\d+"
     * })
     */
    public function indexActiona($page)
    {
        return new Response("<html><body><h1>Index</h1>$page</body></html>");
    }

    /**
     * @Route("/blog/{slug}", name="blog_show")
     */
    public function showAction($slug)
    {
        $param = $this->get('router')->match('/blog/my-blog-post');
        $uri = $this->get('router')->generate('blog_show', array('slug' => 'my-slug'));
        var_dump($param);
        var_dump($uri);
        return new Response("<html><body><h1>Show</h1>$slug</body></html>");
    }
}
