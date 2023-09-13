<?php
class Pessoa{
    public $nome;
    public $idade;

    public $falando = False;
    public $comendo = False;

    public function __construct($nome, $idade){
        $this->nome = $nome;
        $this->idade = $idade;
    }
}