<?php

namespace App\Controller\tp2;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class DashboardController extends AbstractController
{
    #[Route('/dashboard/include-embed-macro', name: 'app_dashboard')]
    public function index(): Response
    {
        return $this->render('tp2/dashboard.html.twig', [
            'controller_name' => 'DashboardController',
        ]);
    }
}
