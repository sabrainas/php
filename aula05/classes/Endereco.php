<?php
class Endereco{
    private $cidade;
    private $estado;

    function __construct(string $cidade, string $estado){
        $this->cidade = $cidade;
        $this->estado = $estado;
    }

    public function getCidadeEstado(){
        return "{$this->cidade}/{$this->estado}";
    }

    public function __destruct() {
        echo "Endereço: {$this->getCidadeEstado()} foi apagado";
    }
}