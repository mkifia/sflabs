<?php 

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

/**
* ArticleController
*/
class ArticleController extends Controller
{
    /**
     * @Route(
     *     "/articles/{_locale}/{year}/{title}.{_format}",
     *     defaults={"_format": "html"},
     *     requirements={
     *         "_locale": "en|fr",
     *         "_format": "html|rss",
     *         "year": "\d+"
     *     }
     * )
     */
    public function showAction($_locale, $year, $title)
    {
        return new Response("<html><body>$_locale $year $title</body></html>");
    }
}
