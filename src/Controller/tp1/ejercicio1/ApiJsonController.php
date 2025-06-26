<?php

namespace App\Controller\tp1\ejercicio1;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ApiJsonController extends AbstractController
{
    #[Route('api/usuario/{id}', name:'json_usuario')]
    public function apiUsuarioAction(int $id): Response {
        $datos = [
            'id' => $id,
            'nombre' => 'Valentin',
            'email' => 'example@gmail.com'
        ];

        return $this->json($datos);
    }
}
