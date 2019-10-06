<?php

  class Pessoa
  {
    private $genero;
    private $peso;
    private $altura;

    public function __construct(string $xGenero, float $xPeso, float $xAltura)
    {
      $this->genero = $xGenero;
      $this->peso = $xPeso;
      $this->altura = $xAltura;
    }

    public function getGenero()
    {
      return $this->genero;
    }
    
    public function getPeso()
    {
      return $this->peso;
    }

    public function getAltura()
    {
      return $this->altura;
    }

  }

?>