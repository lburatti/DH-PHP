<?php
require_once("utils/funcaoLogin.php");

if ($_POST) {
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $estaLogado = logarUsuario($email, $senha);

    if ($estaLogado) {
        // para redirecionar para a pagina index.php (parecido com o href do HTML)
        header("Location: index.php");
    } else {
        $erro = "Usuário ou senha inválidos";
    }
}

?>

<?php require_once('inc/head.php'); ?>

<body>
    <?php require_once('inc/header.php'); ?>

    <div class="container">
        <h1>Preencha o formulário para efetuar login</h1>
        <form method="POST" action="login.php">
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="usuario@exemplo.com">
            </div>
            <div class="form-group">
                <label for="senha">Senha</label>
                <input type="password" name="senha" class="form-control" id="senha" placeholder="Digite sua senha">
            </div>
            <?php if (isset($erro)) { ?>
                <div class="alert alert-danger">
                    Usuário ou senha inválidos
                </div>
            <?php } ?>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>

</body>