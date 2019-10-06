<?php

  class CalculadoraImc
  {
    private $pessoa;

    public function __construct(Pessoa $xPessoa)
    {
      $this->pessoa = $xPessoa;
    }

    public function calcularImc()
    {
      return $this->pessoa->getPeso() / ($this->pessoa->getAltura() * $this->pessoa->getAltura());
    }

    public function situacaoImc()
    {
      $resultado = $this->calcularImc();
      if($this->pessoa->getGenero() == "m"){
        if($resultado < 20){
          return "Abaixo do peso";
        } else if ($resultado < 25 && $resultado >= 20){
          return "Peso ideal";
        } else {
          return "Acima do peso";
        }
      } else {
        if($resultado < 19){
          return "Abaixo do peso";
        } else if ($resultado < 19 && $resultado >= 24){
          return "Peso ideal";
        } else {
          return "Acima do peso";
        }
      }
    }
  }

?>