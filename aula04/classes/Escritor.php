<?php
class Escritor{
    private $nome;
    private $caneta;

    public function __construct(string $nome){
        $this->nome = $nome;
    }
    public function getNome(){
        return $this->nome;
    }
    public function setCaneta(Caneta $caneta){
        $this->caneta = $caneta;
    } 
        
}