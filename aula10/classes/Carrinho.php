<?php
class Carrinho {
    private $produtos = [];

    public function insere(CarrinhoInterface $produto): void{
        $this->produtos[] = $produto;
    }

    public function total(): float{
        $total = 0;
        foreach($this->produtos as $produto){
            $total += $produto->getPreco();
        }
        return $total;
    }
}