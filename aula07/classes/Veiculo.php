<?php
class Veiculo{
    protected $nome;
    protected $modelo;
    protected $passageiros;

    public function __construct(string $nome, string $modelo, int $passageiros) {
        $this->nome = $nome;
        $this->modelo = $modelo;
        $this->passageiros = $passageiros;
    }

    public function getNome(): string{
        return $this->nome;
    }
    public function getModelo(): string{
        return $this->modelo;
    }
    public function getPassageiros(): int{
        return $this->passageiros;
    }
}