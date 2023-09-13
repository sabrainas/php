<?php
require_once "classes/Pessoa.php";

$luiz = new Pessoa('Luiz', 32);
$joao = new Pessoa('Joao', 25);
echo $luiz->nome . PHP_EOL; //quebra de linha
echo $joao->nome . PHP_EOL;

$luiz->falar("Programação orientada a objetos");
$joao->falar("Animais");
$luiz->parar_falar();
$luiz->falar("animais"); 
//$pessoa1->nome = 'Luiz';
//echo $pessoa1->nome;
