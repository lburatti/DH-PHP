<?php

    $usuario = [
        "nome" => "Marcelo",
        "email" => "marcelo@digitalhouse.com",
        "senha" => "123456",
        "nivelAcesso" => mt_rand(0, 1)
    ];

    if($_POST){
        $nomeCurso = $_REQUEST["nomeCurso"];
        $nome = $_REQUEST["nome"];
        $cpf = $_REQUEST["cpf"];
        $nroCartao = $_REQUEST["nroCartao"];
        $validade = $_REQUEST["validade"];
        $cvv = $_REQUEST["cvv"];
        $erros = [];

        function validaNome($nome){
            return strlen($nome) <= 20;
        }

        function validaCpf($cpf){
            return strlen($cpf) === 11;
        }

        function validaNroCartao($nroCartao){
            if(strlen($nroCartao) === 16){
                $ultimos = substr($nroCartao, 11, 4);
                return $ultimos;
            }
        }

        function validaData($data){
            $dataAtual = date("Y-m");
            return $data >= $dataAtual;
        }

        function validaCvv($cvv){
            return strlen($cvv) === 3;
        }

        function validaCompra($nome, $cpf, $nroCartao, $validade, $cvv){
            global $erros;

            if(!validaNome($nome)){
                array_push($erros, "O nome deve possuir até 20 caracteres");
            }

            if(!validaCpf($cpf)){
                array_push($erros, "O CPF deve possuir apenas 11 caracteres");
            }

            if(!validaNroCartao($nroCartao)){
                array_push($erros, "O cartão deve possuir 16 caracteres");
            }

            if(!validaData($validade)){
                array_push($erros, "A validade precisa ser maior que a data atual");
            }

            if(!validaCvv($cvv)){
                array_push($erros, "O CVV deve possuir apenas 3 caracteres");
            }
        }

        validaCompra($nome, $cpf, $nroCartao, $validade, $cvv);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Hacks DH</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/style.css"/>
  <script defer src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script defer src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script defer src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">
        <img src="assets/img/logo.png" width="50" height="50" alt="Logo"> Hacks DH
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <?php if($usuario["nivelAcesso"] == 1){ ?>
            <li class="nav-item">
              <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Available</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Olá <?php echo $usuario["nome"]; ?></a>
            </li>
          <?php } else { ?> 
            <li class="nav-item">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
          <?php } ?>
        </ul>
      </div>
    </nav>
  </header>
  <div class="container">
      <div class="col-md-6 col-md-offset-3">
            <?php if(isset($erros) && count($erros) > 0){ ?>
                <div class="panel panel-danger">
                    <div class="panel-heading">
                        <span>Preencha os campos corretamente</span>
                    </div>
                    <div class="panel-body">
                        <ul class="list-group">
                            <?php foreach ($erros as $erro) { ?>
                                <li class="list-group-item">
                                    <?php echo $erro; ?>
                                </li>
                            <?php } ?>
                        </ul>
                        <div class="center">
                            <a href="index.php">Voltar para Home</a>
                        </div>
                    </div>
                </div>
            <?php } else { ?>
                <div class="panel panel-heading">
                    <div class="panel panel-primary">
                        Compra realizada com sucesso
                    </div>
                    <div class="panel-body">
                        <div class="center">
                            <p>Parabéns <?php echo $nome; ?> por comprar o <?php echo $nomeCurso; ?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
      </div>
  </div>
</body>
</html>