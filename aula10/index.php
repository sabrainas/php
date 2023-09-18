<?php
declare(strict_types = 1);
require_once 'classes/Produto.php';
require_once 'classes/Carrinho.php';
require_once 'classes/Servico.php';

$p1 = new Produto('Camiseta', 50);
$p2 = new Produto('Caneca', 25);
$p3 = new Produto('Computador', 3000);

$carrinho = new Carrinho();
print $carrinho->total();