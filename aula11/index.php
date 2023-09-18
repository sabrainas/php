<?php
declare(strict_types = 1);
require_once 'classes/Conta.php';
require_once 'classes/ContaCorrente.php';
require_once 'classes/ContaPoupanca.php';

$cc = new ContaCorrente(1111, 3333, 0, 100);
$cc -> sacar(10);
$cc -> depositar(20);
$cc -> sacar (10);