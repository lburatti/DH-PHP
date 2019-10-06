<?php
    require_once("utils/funcaoCadastro.php");

    if($_POST){
      
      $nome = $_POST["nome"];
      $email = $_POST["email"];
      $senha = $_POST["senha"];
      $confirmaSenha = $_POST["confirmaSenha"];
      
      if($senha !== $confirmaSenha){
        $mensagem = "Senha e confirmação de senha não conferem";
      } else {
        $novoUsuario = [
          "nome" => $nome,
          "email" => $email,
          "senha" => password_hash($senha, PASSWORD_DEFAULT),
          "nivelAcesso" => 0
        ];

        $cadastrou = cadastroDeUsuario($novoUsuario);
      }
    }

?>

<?php require_once("inc/head.php"); ?>
<body>
  <?php require_once("inc/header.php"); ?>
  <div class="container">
    <h1>Formulário de Cadastro</h1>
    <form method="POST" action="cadastro.php">
      <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" name="nome" class="form-control" id="nome" aria-describedby="nomeHelp" placeholder="Digite seu nome">
      </div>
      <div class="form-group">
        <label for="email">E-mail</label>
        <input type="email" name="email" class="form-control" id="email" placeholder="usuario@exemplo.com">
      </div>
      <div class="form-group">
        <label for="senha">Senha</label>
        <input type="password" name="senha" class="form-control" id="senha" placeholder="Digite sua senha">
      </div>
      <div class="form-group">
        <label for="confirmaSenha">Confirma Senha</label>
        <input type="password" name="confirmaSenha" class="form-control" id="confirmaSenha" placeholder="Digite sua senha novamente">
      </div>
      <?php if(isset($mensagem)){ ?>
        <div class="alert alert-danger">
          Campos senha e confirma senha não conferem
        </div>
      <?php } ?>
      <?php if(isset($cadastrou)){ ?>
        <div class="alert alert-success">
          Usuário cadastrado com sucesso
        </div>
      <?php } ?>
      <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
  </div>
</body>