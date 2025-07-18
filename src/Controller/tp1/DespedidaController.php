<?php

namespace App\Controller\tp1;

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

    #[Route('despedida/ejercicio1/{nombre}', name: 'despedida_ejercicio1_nombre')]
    public function despedidaEjercicio1Action(string $nombre): Response {
        $urlSaludo = $this->generateUrl('app_saludo_nombre', ['nombre' => $nombre]);
        return new Response('
        <h1>Hasta luego, '.$nombre.'!. Nos vemos pronto</h1>
        <p>Volver a <a href='.$urlSaludo.'>saludo</a></p>'
        );
    }
}
