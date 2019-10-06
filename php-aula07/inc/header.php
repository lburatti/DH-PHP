<?php 

  $usuario = [
    "nome" => "Marcelo",
    "email" => "marcelo@digitalhouse.com",
    "senha" => "123456",
    "nivelAcesso" => mt_rand(0, 1)
  ];

?>

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