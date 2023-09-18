<?php
abstract class Conta{
    protected $agencia, $conta, $saldo;

    function __construct(int $agencia, int $conta, float $saldo){
        $this->agencia = $agencia;
        $this->conta = $conta;
        $this->saldo = $saldo;
    }

    public function detalhes(): void{
        echo "Agência: {$this->agencia}";
        echo "Conta: {$this->conta}";
        echo "Saldo: {$this->saldo} \n";
    }

    public function depositar(float $valor){
        $this->saldo += $valor;
        $this->detalhes();
    }

    abstract public function sacar(float $valor): void;
}