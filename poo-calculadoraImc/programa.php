<?php

  include_once("classes/CalculadoraImc.php");
  include_once("classes/Pessoa.php");

  $pessoa = new Pessoa('m', 60, 1.85);

  $calculadoraImc = new CalculadoraImc($pessoa);

  // var_dump($calculadoraImc);
  echo "Considerando uma pessoa do sexo <b>masculino</b>, que pesa <b>65 kg</b> e tem altura de <b>1,70 m</b>, temos o seguinte resultado:<br>";
  echo "Seu IMC é <i style='font-weight:bolder;'>".$calculadoraImc->calcularImc()."</i><br>";
  echo "Sua situação é <i style='font-weight:bolder'>".$calculadoraImc->situacaoImc()."</i><br>";
  echo "E o seu IMC? Sabe qual é?<br>";
  echo "<b>Desafio!</b> Crie um formulário para calcular o IMC do visitante do seu site! =)<br>";
  echo "<b>Dica:</b> depois de completar o desafio, suba para um repositório no seu Github e comece seu porftólio!";

?>