<?php
declare(strict_types = 1);
require_once 'classes/Cliente.php';
require_once 'classes/Endereco.php';

$cliente1 = new Cliente('Luiz');
$cliente1->setEndereco('Belo Horizonte', 'MG');

echo $cliente1 ->getNome() . PHP_EOL;
$cliente1->showEnderecos();