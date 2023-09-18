<?php
class Produto {
    private $nome, $preco;

    public function __construct(string $nome, float $preco)
    {
        $this->preco = $preco;
        $this->nome = $nome;
    }

    public function getNome():string{
        return $this->nome;
    }
    public function getPreco():float{
        return $this->preco;
    }
}
