<?php

namespace App\Controller\tp1\ejercicio1;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class DespedidaController extends AbstractController
{
    #[Route('/despedida', name: 'app_despedida')]
    public function despedidaAction(): Response
    {
        return $this->render('tp1/ejercicio1/despedida.html.twig', [
            'controller_name' => 'DespedidaController',
        ]);
    }
}
