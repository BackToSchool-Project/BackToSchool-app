<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WebpackTestController extends AbstractController
{
    #[Route('/webpack/test', name: 'app_webpack_test')]
    public function index(): Response
    {
        return $this->render('webpack_test/index.html.twig', [
            'controller_name' => 'WebpackTestController',
        ]);
    }
}
