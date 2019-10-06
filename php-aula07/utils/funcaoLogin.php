<?php

    function logarUsuario($email, $senha){
        $logado = false;
        // capturou o nome do arquivo que desejamos utilizar
        $nomeArquivo = "usuarios.json";
        // efetuando leitura do arquivo usuarios.json
        $jsonUsuarios = file_get_contents($nomeArquivo);
        // transformar o nosso json em um array associativo
        $arrayUsuarios = json_decode($jsonUsuarios, true);

        foreach($arrayUsuarios["usuarios"] as $key => $value){
            if ($email == $value["email"] && password_verify($senha, $value["senha"])){
                    $logado = true;
                    break;
            } 
        }
        return $logado;
    }


?>