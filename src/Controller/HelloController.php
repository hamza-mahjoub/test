<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController extends AbstractController
{
    /**
     * @Route("/hello/{name}", name="hello")
     */
    public function index(Request $request)
    {
        $name=$request->get('name');
        return $this->render('hello/index.html.twig', [
            'controller_name' => 'HelloController',
            'name' => $name,
        ]);
    }
}
