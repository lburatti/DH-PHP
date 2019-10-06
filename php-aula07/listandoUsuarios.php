<?php

  $nomeArquivo = "usuarios.json";

  // lendo o conteúdo do arquivo usuarios.json
  $jsonUsuarios = file_get_contents($nomeArquivo);

  // transformando o conteúdo em um array
  $arrayUsuarios = json_decode($jsonUsuarios, true);
?>
<?php require_once("inc/head.php"); ?>
<body>
  <?php require_once("inc/header.php"); ?>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Nome</th>
          <th scope="col">Sobrenome</th>
        </tr>
      </thead>
      <tbody>
          <?php foreach ($arrayUsuarios["usuarios"] as $key => $value) { ?>
            <tr>
              <td scope="row"><?php echo $value["nome"] ;?></td>
              <td><?php echo $value["sobrenome"]; ?></td>
            </tr>
          <?php } ?>
      </tbody>
    </table>
</body>