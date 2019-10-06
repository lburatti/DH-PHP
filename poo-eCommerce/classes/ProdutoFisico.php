<?php

class ProdutoFisico extends Produto
{
    private $valorInicialFrete = 50;

    public function __construct(string $xNome, string $xDescricao, float $xPreco)
    {
        parent::__construct($xNome, $xDescricao, $xPreco);
    }
}