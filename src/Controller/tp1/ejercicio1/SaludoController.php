<?php

namespace App\Controller\tp1\ejercicio1;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SaludoController extends AbstractController
{
    #[Route('/saludo', name: 'app_saludo')]
    public function saludoAction(): Response
    {
        return $this->render('tp1/ejercicio1/saludo.html.twig', [
            'controller_name' => 'SaludoController',
        ]);
    }

    # Rutas y Parámetros

    # Un parámetro
    #[Route('/saludo/{nombre}', name: 'app_saludo_nombre')] 
    public function saludoNombreAction(string $nombre): Response {
        $urlHome = $this->generateUrl('app_saludo'); # Funcion generateUrl
        $urlDespedida = $this->generateUrl('despedida_ejercicio1_nombre', ['nombre' => $nombre]); # Redirección despedida
        return new Response(
            '<html><body><h1>Bienvenido '.$nombre.'</h1>
            <p>Para volver a la página de inicio, <a href="'.$urlHome.'">haz clic aquí</a>.</p>
            <p>Ir a <a href='.$urlDespedida.'>despedida</a>.</p>
            </body></html>'
        );
    }

    #[Route('saludo/ejercicio1/{nombre}', name: 'saludo_ejercicio1_nombre')]
    public function saludoEjercicio1Action(string $nombre): Response {
        return new Response('<h1>Hola, '.$nombre.'. Bienvenido/a al sistema</h1>');
    }

    # Dos parámetros
    #[Route('/saludo/{nombre}/{estado}', name: 'saludo_estado')]
    public function saludoEstadoAction(string $nombre, string $estado): Response {
        return new Response(
            '<html><body><h1>Soy '.$nombre.' y estoy '.$estado.'</h1></body></html>'
        );
    }

    # Objeto Request como argumento del Controlador
    #[Route('saludoForm/form', name: 'saludo_form', methods: ['GET', 'POST'])]
    public function saludoFormAction(Request $request): Response {
        if ($request->isMethod('POST')) {
            $nombre = $request->request->get('nombre');
            $apellido = $request->request->get('apellido');

            return new Response(
                '<h1>Hola '.$nombre." ".$apellido.'</h1>'
            );
        }

        return new Response(
            '<html><body>
            <form method="POST">
                Nombre: <input type="text" name="nombre" required>
                Apellido: <input type="text" name="apellido" required>
                <button type="submit">Enviar</button>
            </form>
            </body></html>'
        );

        # Investigar cómo funcionan los métodos POST y GET
    }

}