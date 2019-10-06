<?php

    $cursos = [
      "Full Stack" => [
        "fullstack",
        "Curso de Web Full Stack", 
        "aprenda a desenvolver aplicações web", 
        "assets/img/full.jpeg"
      ],
      "Mobile Android" => [
        "mobile",
        "Curso de Mobile Android", 
        "aprenda a desenvolver aplicativos", 
        "assets/img/android.png"
      ],
      "User Experience" => [
        "ux",
        "Curso de UX", 
        "aprenda a melhorar a experiência do usuário", 
        "assets/img/ux.png"
      ],
      "Marketing Digital" => [
        "marketing",
        "Curso de Marketing Digital", 
        "aprenda a desenvolver campanhas e mídia social", 
        "assets/img/marketing.jpg"
      ]
    ];

?>
<?php require_once("inc/head.php"); ?>
<body>
  <?php require_once("inc/header.php"); ?>
  <main class="container pt-5">
    <section class="row">
      <h1 class="col-12 text-center my-4">Cursos</h1>

      <?php foreach ($cursos as $nomeCurso => $infosCurso) { ?>
        <div class="col-3 mr-2 mt-5" style="width: 18rem;">
          <img src="<?php echo $infosCurso[3]; ?>" class="card-img-top" alt="Mobile Android">
          <div class="card-body">
            <h5 class="card-title"><?php echo $infosCurso[1]; ?></h5>
            <p class="card-text"><?php echo $infosCurso[2]; ?></p>
            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#<?php echo $infosCurso[0]; ?>" role="button">Visualizar</a>
          </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="<?php echo $infosCurso[0]; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><?php echo $infosCurso[1]; ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form method="POST" action="validaCompra.php">
                  <input type="hidden" name="nomeCurso" value="<?php echo $infosCurso[1]; ?>">
                  <div class="form-group">
                    <label for="nome">Nome Completo</label>
                    <input type="text" name="nome" class="form-control" id="nome" aria-describedby="nome" placeholder="Informe seu Nome">
                  </div>
                  <div class="form-group">
                    <label for="cpf">CPF</label>
                    <input type="text" name="cpf" class="form-control" id="cpf" placeholder="Informe seu CPF">
                  </div>
                  <div class="form-group">
                    <label for="nroCartao">Número do Cartão</label>
                    <input type="text" name="nroCartao" class="form-control" id="nroCartao" placeholder="1234 5678 9012 1234">
                  </div>
                  <div class="form-group">
                    <label for="validade">Ano de Validade</label>
                    <input type="month" name="validade" class="form-control" id="validade" placeholder="09/2019">
                  </div>
                  <div class="form-group">
                    <label for="cvv">CVV</label>
                    <input type="text" name="cvv" class="form-control" id="cvv" placeholder="Informe o código de segurança do cartão">
                  </div>
                  <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>
    </section>
  </main>
</body>
</html>
