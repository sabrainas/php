<?php
class Servico {
    private $nome, $valor;

    public function __construct(string $nome, float $valor)
    {
        $this->valor = $valor;
        $this->nome = $nome;
    }

    public function getNome():string{
        return $this->nome;
    }
    public function getValor():float{
        return $this->valor;
    }
}
