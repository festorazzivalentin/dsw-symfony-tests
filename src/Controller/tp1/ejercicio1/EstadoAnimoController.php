<?php

namespace App\Controller\tp1\ejercicio1;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class EstadoAnimoController extends AbstractController
{
    #[Route('/estado/{nombre}/{estado?}', name: 'app_estado_animo')]
    public function estadoAnimoAction(string $nombre, ?string $estado): Response {
        if ($estado === null) {
            $estado = '¿cómo estás hoy?';
            return new Response('<h1>Hola '.$nombre.' '.$estado.'</h1>');
        } else {
        return new Response('<h1>Hola '.$nombre.'. Veo que hoy estas '.$estado.'</h1>');
        }
    }
}
