<?php
class ContaCorrente extends Conta{
    private $limite;

    function __construct(int $agencia, int $conta, float $saldo, float $limite)
    {
        parent::__construct($agencia, $conta, $saldo);
        $this->limite = $limite;
    }
    public function sacar(float $valor): void{
        if(($this->saldo + $this->limite) < $valor){
            echo "Saldo insuficiente.\n";
            $this->detalhes();
            return;
        }

        $this->saldo -= $valor;
        $this->detalhes();
    }
}