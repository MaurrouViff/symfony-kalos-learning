<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class AdminController extends AbstractController
{
    #[Route('/admin', name: 'app_admin')]
    public function showPanel(): Response
    {
        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }

    #[Route('/admin/add-role', name: 'app_add_role', methods: ['GET', 'POST'])]
    public function addRole(Request $request, EntityManagerInterface $entityManager): Response {


        return $this->render('admin/role.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }
}
