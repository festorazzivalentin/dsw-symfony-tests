<?php

namespace App\Controller\tp2;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class EstudianteController extends AbstractController
{
    #[Route('/estudiantes/json', name: 'estudiantes_json')]
    public function estudiantesJsonAction(): Response
    {
        $estudiantes_json = [
            ['id' => 1, 'nombre' => 'Juan', 'apellido' => 'Pérez', 'edad' => 20, 'nota' => 8.5],
            ['id' => 2, 'nombre' => 'María', 'apellido' => 'Gómez', 'edad' => 22, 'nota' => 5.0],
            ['id' => 3, 'nombre' => 'Pedro', 'apellido' => 'López', 'edad' => 21, 'nota' => 9.0]
        ];

        return $this->render('tp2/estudiantes.html.twig', [
            'estudiantes' => $estudiantes_json
        ]);
    }
}
