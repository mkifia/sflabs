<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class LuckyController extends Controller
{
    /**
    * @Route("/lucky/number/{count}")
    */
    public function numberAction($count)
    {
        for ($i=0; $i < $count; $i++) { 
            $number[] = rand(0, 100);
        }
        $numberList = implode(', ', $number);

        return $this->render(
            'lucky/number.html.twig',
            array('luckyNumberList' => $numberList)
        );
    }

    /**
    * @Route("/api/lucky/number")
    */
    public function apiNumberAction() 
    {
        $data = array(
            'lucky_numer' => rand(0, 100),
        );
        return new JsonResponse($data);
    }
}