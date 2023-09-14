<?php
require_once 'classes/Produto.php';

$camiseta = new Produto();
$camiseta->nome = 'camiseta php é mt legal';
$camiseta->id = 1000;
$camiseta->setPreco(50);

$camiseta -> aumentaEstoque(500);
echo $camiseta->getEstoque() . PHP_EOL;
$camiseta->setEstoque(100);
echo $camiseta -> getEstoque() . PHP_EOL;