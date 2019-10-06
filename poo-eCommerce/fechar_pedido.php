<?php

session_start();

include __DIR__ . '/vendor/autoload.php';

include 'classes/Produto.php';
include 'classes/ItemCarrinho.php';
include 'classes/Carrinho.php';
include 'classes/ProdutoFisico.php';
include 'classes/ProdutoVirtual.php';

$carrinho = unserialize($_SESSION['carrinho']);

$nomeCliente = $_POST['nome_cliente'];
$emailCliente = $_POST['email_cliente'];
$cpfCliente = $_POST['cpf_cliente'];
$ruaCliente = $_POST['rua_cliente'];
$numeroCliente = $_POST['numero_cliente'];
$bairroCliente = $_POST['bairro_cliente'];
$cidadeCliente = $_POST['cidade_cliente'];
$estadoCliente = $_POST['estado_cliente'];
$complementoCliente = $_POST['complemento_cliente'];
$numeroCartaoCliente = $_POST['numero_cartao_cliente'];
$validadeCartaoCliente = $_POST['validade_cartao_cliente'];
$cvvCartaoCliente = $_POST['cvv_cartao_cliente'];
$nomeImpressoCartaoCliente = $_POST['nome_impresso_cartao_cliente'];
$parcelasCompraCliente = $_POST['parcelas_compra_cliente'];

// echo $nomeCliente;
// echo $emailCliente;
// echo $cpfCliente;
// echo $ruaCliente;
// echo $numeroCliente;
// echo $bairroCliente;
// echo $cidadeCliente;
// echo $estadoCliente;
// echo $complementoCliente;
// echo $numeroCartaoCliente;
// echo $validadeCartaoCliente;
// echo $cvvCartaoCliente;
// echo $nomeImpressoCartaoCliente;
// echo $parcelasCompraCliente;

$dadosTransacao = [
    // *100 pois o pagar.me usa as transações em centavos.
    'amount' => $carrinho->total() * 100,
    'payment_method' => 'credit_card',
    'card_holder_name' => $nomeCliente,
    'card_cvv' => $cvvCartaoCliente,
    'card_number' => $numeroCartaoCliente,
    'card_expiration_date' => $validadeCartaoCliente,
    'customer' => [
        'external_id' => '1',
        'name' => $nomeCliente,
        'type' => 'individual',
        'country' => 'br',
        'documents' => [
          [
            'type' => 'cpf',
            'number' => $cpfCliente
          ]
        ],
        'phone_numbers' => [ '+551199999999' ],
        'email' => $emailCliente
    ],
    'billing' => [
        'name' => $nomeCliente,
        'address' => [
          'country' => 'br',
          'street' => $ruaCliente,
          'street_number' => $numeroCliente,
          'state' => $estadoCliente,
          'city' => $cidadeCliente,
          'neighborhood' => $bairroCliente,
          'zipcode' => '01451001'
        ]
    ],
    'shipping' => [
        'name' => 'Professor Marcelo!',
        'fee' => 1020,
        'delivery_date' => '2018-09-22',
        'expedited' => false,
        'address' => [
          'country' => 'br',
          'street' => $ruaCliente,
          'street_number' => $numeroCliente,
          'state' => $estadoCliente,
          'city' => $cidadeCliente,
          'neighborhood' => $bairroCliente,
          'zipcode' => '01451001'
        ]
    ],
    'items' => [
        [
          'id' => '1',
          'title' => 'R2D2',
          'unit_price' => 300,
          'quantity' => 1,
          'tangible' => true
        ],
        [
          'id' => '2',
          'title' => 'C-3PO',
          'unit_price' => 700,
          'quantity' => 1,
          'tangible' => true
        ]
    ]
];

$pagarme = new PagarMe\Client('ak_test_JUi8j9xpMYLNwp7y3oJDDZSGIfTIUA');

$transacao = $pagarme->transactions()->create($dadosTransacao);

var_dump($transacao->status);
