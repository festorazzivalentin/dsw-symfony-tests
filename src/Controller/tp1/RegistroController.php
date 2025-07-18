<?php

namespace App\Controller\tp1;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;

final class RegistroController extends AbstractController
{
    #[Route('/registro', name: 'app_registro', methods: ['GET', 'POST'])]
    public function registroAction(Request $request): Response
    {
        if ($request->isMethod('POST')) {
            $nombre = $request->request->get('nombre');
            $email = $request->request->get('email');

            // Acá podría procesar los datos para guardarlos en una base de datos. En este ejemplo, los mostramos.
            return new Response('<h1>Hola, '.$nombre.'!. Tu email es: '.$email.'</h1>');
        }
        return new Response('
        <form method="POST">
            <label>Nombre: <input type="text" name="nombre" required></label><br>
            <label>Email: <input type="email" name="email" required></label><br>
            <button type="submit">Enviar</button>
        </form>
        ');
    }
}
