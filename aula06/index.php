<?php
declare(strict_types = 1);
require_once 'classes/CarrinhoDeCompras.php';
require_once 'classes/Produto.php';

$p1 = new Produto('Camiseta', 50);
$p2 = new Produto('Caneca', 15);

$carrinho = new CarrinhoDeCompras();
$carrinho->addProdutos($p1);
$carrinho->addProdutos($p2);

foreach($carrinho->getProdutos() as $produto){
    echo $produto -> getNome();
    echo " ";
    echo $produto->getPreco();
    echo PHP_EOL;
}

unset($carrinho);
echo $p1->getNome();
echo " ";
echo $p2 ->getPreco();