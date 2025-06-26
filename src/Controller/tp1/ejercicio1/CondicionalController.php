<?php

namespace App\Controller\tp1\ejercicio1;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class CondicionalController extends AbstractController
{
    #[Route('mayoria-edad/{edad}', name: 'mayoria_edad')]
    public function mayoriaEdadAction(int $edad): Response {
        if ($edad >= 18) {
            $mensaje = "Sos mayor de edad. Tenés ".$edad." años.";
        } else {
            $mensaje = "Sos menor de edad. Tenés ".$edad." años.";
        }

        return new Response($mensaje);
    }
}
