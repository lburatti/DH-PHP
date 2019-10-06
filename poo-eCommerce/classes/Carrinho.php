<?php

class Carrinho
{
    private $itensCarrinho = [];

    public function adicionarItemCarrinho(ItemCarrinho $xItemCarrinho)
    {
        $this->itensCarrinho[] = $xItemCarrinho;
    }

    public function total()
    {
        $total = 0;

        foreach ($this->itensCarrinho as $item) {
            $total = $total + $item->subtotal();
        }

        return $total;
    }

    public function getItensCarrinho()
    {
        return $this->itensCarrinho;
    }
}