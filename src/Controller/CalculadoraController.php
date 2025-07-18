<?php

namespace App\Controller;

use App\Service\CalculadoraService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class CalculadoraController extends AbstractController
{
    #[Route('/calculadora', name: 'app_calculadora')]
    public function indexAction(): Response
    {
        $calculadoraService = new CalculadoraService();
        
        $numero1 = 10; // Valores hardcodeados
        $numero2 = 5;

        $suma = $calculadoraService->suma($numero1, $numero2);
        $resta = $calculadoraService->resta($numero1, $numero2);
        $multiplicacion = $calculadoraService->multiplicacion($numero1, $numero2);
        $division = $calculadoraService->division($numero1, $numero2);

        return $this->render('calculadora/index.html.twig', [
            'controller_name' => 'CalculadoraController',
            'suma' => $suma,
            'resta' => $resta,
            'multiplicacion' => $multiplicacion,
            'division' => $division,
        ]);
    }
}
