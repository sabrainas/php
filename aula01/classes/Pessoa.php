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

    public function falar($assunto){
        if($this->falando){
            echo "{$this->nome} já está falando.\n";
            return;
        }
        echo "{$this->nome} esta falando sobre $assunto.";
        $this->falando = True;
    }

    public function parar_falar(){
        if(!$this->falando){
            echo "{$this->nome} não está falando\n";
            return;
        }
        echo "{$this->nome} parou de falar\n";
        $this->falando = False;
    }

    public function comer($alimento){
        if($this->falando){
            echo "{$this->nome} não pode comer falando\n";
            return;
        }
        if($this->comendo){
            echo "{$this->nome} ja está comendo\n";
            return;
        }

        echo "{$this->nome} esta comendo\n";
        $this->comendo = True;
    }
}