<?php

class ItemCarrinho
{
    private $produto;
    private $quantidade;

    public function __construct(Produto $xProduto, int $xQuantidade)
    {
        $this->produto = $xProduto;
        $this->quantidade = $xQuantidade;
    }

    public function subtotal()
    {
        return $this->quantidade * $this->produto->getPreco();
    }

    public function getProduto()
    {
        return $this->produto;
    }

    public function getQuantidade()
    {
        return $this->quantidade;
    }
}