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
        <h2>Finalizar compra</h2>
        <form method="post" action="fechar_pedido.php">
            <div class="row">
                <div class="col-md-4">
                    <h3>Dados do comprador</h3>
                    <div class="form-group">
                        <label for="nome_cliente">Nome</label>
                        <input
                            type="text"
                            class="form-control"
                            id="nome_cliente"
                            name="nome_cliente"
                            placeholder="Maria Luiza">
                    </div>
                    <div class="form-group">
                        <label for="email_cliente">E-mail</label>
                        <input
                            type="email"
                            class="form-control"
                            id="email_cliente"
                            name="email_cliente"
                            placeholder="seu@email.com">
                    </div>
                    <div class="form-group">
                        <label for="cpf_cliente">CPF</label>
                        <input
                            type="text"
                            class="form-control"
                            id="cpf_cliente"
                            name="cpf_cliente">
                    </div>
                </div>
                <div class="col-md-4">
                    <h3>Dados de cobrança/entrega</h3>
                    <div class="form-group">
                        <label for="rua_cliente">Rua</label>
                        <input
                            type="text"
                            class="form-control"
                            id="rua_cliente"
                            name="rua_cliente">
                    </div>
                    <div class="form-group">
                        <label for="numero_cliente">Número</label>
                        <input
                            type="number"
                            class="form-control"
                            id="numero_cliente"
                            name="numero_cliente">
                    </div>
                    <div class="form-group">
                        <label for="bairro_cliente">Bairro</label>
                        <input
                            type="text"
                            class="form-control"
                            id="bairro_cliente"
                            name="bairro_cliente">
                    </div>
                    <div class="form-group">
                        <label for="cidade_cliente">Cidade</label>
                        <input
                            type="text"
                            class="form-control"
                            id="cidade_cliente"
                            name="cidade_cliente">
                    </div>
                    <div class="form-group">
                        <label for="estado_cliente">Estado</label>
                        <input
                            type="text"
                            class="form-control"
                            id="estado_cliente"
                            name="estado_cliente">
                    </div>
                    <div class="form-group">
                        <label for="complemento_cliente">Complemento</label>
                        <input
                            type="text"
                            class="form-control"
                            id="complemento_cliente"
                            name="complemento_cliente">
                    </div>
                </div>
                <div class="col-md-4">
                    <h3>Pagamento</h3>
                    <div class="form-group">
                        <label for="numero_cartao_cliente">Número do cartão</label>
                        <input
                            type="text"
                            class="form-control"
                            id="numero_cartao_cliente"
                            name="numero_cartao_cliente">
                    </div>
                    <div class="form-group">
                        <label for="validade_cartao_cliente">Validade</label>
                        <input
                            type="text"
                            class="form-control"
                            id="validade_cartao_cliente"
                            name="validade_cartao_cliente"
                            placeholder="0226">
                    </div>
                    <div class="form-group">
                        <label for="cvv_cartao_cliente">CVV</label>
                        <input
                            type="text"
                            class="form-control"
                            id="cvv_cartao_cliente"
                            name="cvv_cartao_cliente">
                    </div>
                    <div class="form-group">
                        <label for="nome_impresso_cartao_cliente">Nome impresso</label>
                        <input
                            type="text"
                            class="form-control"
                            id="nome_impresso_cartao_cliente"
                            name="nome_impresso_cartao_cliente">
                    </div>
                    <div class="form-group">
                        <label for="parcelas_compra_cliente">Parcelas</label>
                        <select
                            name="parcelas_compra_cliente"
                            class="form-control"
                            id="parcelas_compra_cliente">
                            <?php for ($i = 1; $i < 13; $i++) : ?>
                                <option value="<?php echo $i; ?>"><?php echo sprintf('%dx', $i); ?></option>
                            <?php endfor; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Finalizar compra</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="js/app.js"></script>
</body>
</html>