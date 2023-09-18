<?php
class Produto{
    private $nome;
    private $preco;

    function __construct (string $nome, float $preco){
        $this->nome = $nome;
        $this->preco = $preco;
    }
    public function getNome(){
        return $this->nome;
    }
    public function getPreco(){
        return $this->preco;
    }
}