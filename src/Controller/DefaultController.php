<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="app_homepage")
     */
    public function index():Response
    {
        // return $this->render('<body>Hello world!</body>');
        return new Response('<body>Hello world!</body>');
    }
}
