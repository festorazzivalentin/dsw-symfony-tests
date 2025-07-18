<?php

Namespace App\Service;

class FechaService{
    private $formato;

    public function __construct(string $formato) {
        $this->formato = $formato;
    }

    public function obtenerFecha(){
        return (new \DateTime())->format($this->formato);
    }
}