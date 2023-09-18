<?php
declare(strict_types = 1);
require_once 'classes/Veiculo.php';
require_once 'classes/Moto.php';
require_once 'classes/Bicicleta.php';

$b1 = new Bicicleta('Bicicleta', 'Caloy', 1);
echo "O veiculo {$b1->getNome()}/{$b1->getModelo()}";
echo "suporta {$b1->getPassageiros()} passageiros.\n";
$b1->pedalar();

$m1 = new Moto('Moto', 'CG', 2);
echo "O veiculo {$m1->getNome()}/{$m1->getModelo()}";
echo "suporta {$m1->getPassageiros()} passageiros.\n";
$m1->empinar();