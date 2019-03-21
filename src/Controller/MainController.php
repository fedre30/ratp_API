<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController
{
    /**
     * @Route("/index")
     */
    public function index()
    {
        return new Response("Hello world");
    }
}