<?php
session_start();

include 'classes/Produto.php';
include 'classes/ItemCarrinho.php';
include 'classes/Carrinho.php';
include 'classes/ProdutoFisico.php';
include 'classes/ProdutoVirtual.php';

$carrinho = new Carrinho();

$quantidadeProdutos = count($_POST['name']);

for ($i = 0; $i < $quantidadeProdutos; $i++) {
    $nomeProduto = $_POST['name'][$i];
    $descricaoProduto = $_POST['description'][$i];
    $quantidadeProduto = $_POST['quantity'][$i];
    $precoProduto = $_POST['price'][$i];
    $tipoProduto = $_POST['type'][$i];

    // verificação do tipo do produto
    if ($tipoProduto === 'virtual') {
        $produto = new ProdutoVirtual($nomeProduto, $descricaoProduto, $precoProduto, 'http://google.com');
    } else {
        $produto = new ProdutoFisico($nomeProduto, $descricaoProduto, $precoProduto);
    }
    // OUTRA OPÇÃO para usar menos IFs, caso tenha muitos tipos para verificar:
    // switch ($tipoProduto1) {
    //     case 'virtual':
    //         $produto1 = new ProdutoVirtual($nomeProduto1, $descricaoProduto1, $precoProduto1, 'http://google.com');
    //         break;
    //     case 'physical':
    //         $produto1 = new ProdutoFisico($nomeProduto1, $descricaoProduto1, $precoProduto1);
    //         break;
    // }

    $itemCarrinho = new ItemCarrinho($produto, $quantidadeProduto);


    $carrinho->adicionarItemCarrinho($itemCarrinho);
}

$_SESSION['carrinho'] = serialize($carrinho);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/ecommerce.css">
    <title>Meu E-commerce Bacanudo</title>
</head>
<body>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
        <h5 class="my-0 mr-md-auto font-weight-normal">Meu ecommerce bacanudo</h5>
        <nav class="my-2 my-md-0 mr-md-3">
            <a class="p-2 text-dark" href="#">Lorem</a>
            <a class="p-2 text-dark" href="#">Ipsum</a>
            <a class="p-2 text-dark" href="#">Dolor</a>
            <a id="place-order" class="p-2 text-dark" href="#">Ver carrinho</a>
        </nav>
    </div>

    <div class="container">
        <h2>Carrinho</h2>

        <div class="row">
            <div class="col-md-8">
                <ul class="list-group">
                    <?php foreach($carrinho->getItensCarrinho() as $item) : ?>
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <h6 class="my-0"><?php echo $item->getProduto()->getNome(); ?></h6>
                                <p><small class="text-muted"><?php echo $item->getProduto()->getDescricao(); ?></small></p>
                                <p><small>Quantidade: <?php echo $item->getQuantidade(); ?></small></p>
                            </div>
                            <span class="text-muted">R$ <?php echo $item->subtotal(); ?></span>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="col-md-4">
                <div class="list-group">
                    <h5>Resumo</h5>
                    <div class="list-group-item d-flex">
                        <strong>TOTAL:</strong> <?php echo $carrinho->total(); ?>
                    </div>
                    <div class="list-group-item d-flex">
                        <div class="col-md-12">
                            <form method="post" action="checkout.php">
                                <button type="submit" class="btn btn-success">Comprar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="js/app.js"></script>
</body>
</html>