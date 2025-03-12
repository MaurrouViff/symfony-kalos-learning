<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class PhotoChangerController extends AbstractController
{
    #[Route('/photo-changer', name: 'app_photo_changer')]
    public function index(): Response
    {
        return $this->render('photo_changer/index.html.twig', [
            'controller_name' => 'PhotoChangerController',
        ]);
    }
}
