<?php

namespace App\Controller\tp1\ejercicio1;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class AleatorioController extends AbstractController
{
    #[Route('/aleatorio', name: 'app_aleatorio')]
    public function aleatorioAction(): Response {
        $nombres = array('Juan', 'María', 'Pedro', 'Ana', 'Luis', 'Laura', 'Carlos', 'Sofía');
        $nombresKeys = array_rand($nombres, 1);
        $nombreAleatorio = $nombres[$nombresKeys];
        return new Response(
            '<html><body><h1>Hola '.$nombreAleatorio.'!</h1></body></html>'
        );
    }
}
