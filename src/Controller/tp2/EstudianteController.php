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

    #[Route('/estudiantes/cursos', name: 'ver_cursos_estudiantes')]
    public function estudiantesCursosAction(): Response {
        $cursos = [
            'A1' => [
                ['id' => 1, 'nombre' => "María", 'nota' => 8.5],
                ['id' => 2, 'nombre' => "Alejandro", 'nota' => 8.2]
            ],
            'A2' => [
                ['id' => 3, 'nombre' => "Valentín", 'nota' => 9],
                ['id' => 4, 'nombre' => "Adriano", 'nota' => 10]
            ]
        ];
        
        return $this->render('tp2/cursos_por_estudiantes.html.twig', [
            'cursos' => $cursos
        ]);
        
    }

    #[Route('/estudiantes/vista', name: 'vista_estudiantes')]
    public function vistaEstudiantesAction(): Response {

        $estudiantes = [
            ['nombre' => 'Juan', 'nota' => 8.5],
            ['nombre' => 'María', 'nota' => 7.0],
            ['nombre' => 'Pedro', 'nota' => 9.0]
        ];

        return $this->render('tp2/vista.html.twig', [
            'estudiantes' => $estudiantes
        ]);

    }

    
}
