<?php

namespace App\Controller\tp1\ejercicio1;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class RenderizadoController extends AbstractController
{
    #[Route('/renderizado/{nombre}', name: 'app_renderizado')]
    public function renderizadoAction(string $nombre): Response {
        $info = "Mostrando informacin desde plantilla Twig";
        $personajes = [
            'Mario',
            'Luigi',
            'Peach',
            'Bowser',
            'Yoshi'
        ];

        return $this->render('tp1/ejercicio1/renderizado.html.twig', [
            'nombre' => $nombre,
            'info' => $info,
            'personajes' => $personajes
        ]);
    }

    #[Route('api/datos', name: 'api_datos')]
    public function datosAction(): Response {
        $datos = [
            'nombre' => 'Mario',
            'edad' => 35,
            'profesion' => 'Fontanero',
            'habilidades' => ['Saltar', 'Correr', 'Nadar']
        ];

        return $this->json($datos);
    }

}