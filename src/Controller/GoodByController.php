<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GoodByController extends AbstractController
{
    /**
     * @Route("/good/by", name="good_by")
     */
    public function index(): Response
    {
        return $this->render('good_by/index.html.twig', [
            'controller_name' => 'GoodByController',
        ]);
    }
}
