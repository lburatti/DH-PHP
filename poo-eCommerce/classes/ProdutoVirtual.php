<?php

class ProdutoVirtual extends Produto
{
    private $linkDownload;

    public function __construct(string $xNome, string $xDescricao, float $xPreco, string $xLink)
    {
        parent::__construct($xNome, $xDescricao, $xPreco);
        $this->linkDownload = $xLink;
    }
}