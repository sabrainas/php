<?php
class Produto {
    public $id;
    public $nome;
    private $preco;
    private $estoque = 1;

    public function getEstoque(){
        return $this->estoque;
    }

    public function setEstoque($valor){
        $this->estoque = $valor;
        if(!is_numeric($valor)){
            echo "valor do estoque deve ser um numero\n";
            return;
        }
    }

    public function setPreco($preco){
        $this->preco = $preco;
        if(!is_numeric($preco)){
            echo "valor do estoque deve ser um numero\n";
            return;
        }
    }    
    public function aumentaEstoque($qtd){
        $this->estoque += $qtd;
    }

    public function aumentaPreco($percentual){
        $this->preco = $this->preco + ($this->preco * ($percentual/100));
    }
}