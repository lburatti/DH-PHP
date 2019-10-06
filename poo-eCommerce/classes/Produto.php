<?php

class Produto
{
    private $nome;
    private $descricao;
    private $preco;

    public function __construct(string $xNome, string $xDescricao, float $xPreco)
    {
        $this->nome = $xNome;
        $this->descricao = $xDescricao;
        $this->preco = $xPreco;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function getPreco()
    {
        return $this->preco;
    }
}