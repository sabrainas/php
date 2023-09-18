<?php
class Carro extends Veiculo{
    private $rodas;

    public function __construct(string $nome, string $modelo, int $passageiros, int $rodas){
        parent:: __construct($nome, $modelo, $passageiros);
        $this->rodas = $rodas;
    }
    public function getRodas():int {
        return $this->rodas;
    }
    public function acelerar(){
        echo "O {$this->nome} está acelerando.\n";
    }
}