<?php
class Bicicleta extends Veiculo{
    public function pedalar(){
        echo "A {$this->nome} está pedalando.\n";
    }
}