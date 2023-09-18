<?php
class CarrinhoDeCompras{
    private $produtos = [];

    public function addProdutos(Produto $p){
        $this->produtos[] = $p;
    }

    public function getProdutos(){
        return $this->produtos;
    }
}