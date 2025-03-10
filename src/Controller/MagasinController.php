<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class MagasinController extends AbstractController
{
    #[Route('/magasin', name: 'app_magasin')]
    public function index(): Response
    {
        return $this->render('magasin/index.html.twig', [
            'controller_name' => 'MagasinController',
        ]);
    }
}
