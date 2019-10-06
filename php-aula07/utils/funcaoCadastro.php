<?php

  function cadastroDeUsuario($usuario){
    // capturou o nome do arquivo que desejamos utilizar
    $nomeArquivo = "usuarios.json";
    // efetuando leitura do arquivo usuarios.json
    $jsonUsuarios = file_get_contents($nomeArquivo);
    // transformar o nosso json em um array associativo
    $arrayUsuarios = json_decode($jsonUsuarios, true);
    // adicionando novo usuário no array
    array_push($arrayUsuarios["usuarios"], $usuario);
    // transformando o array em json
    $jsonUsuarios = json_encode($arrayUsuarios);
    // adicionar usuário no json
    $cadastrou = file_put_contents($nomeArquivo, $jsonUsuarios);
    return $cadastrou;
  }

?>