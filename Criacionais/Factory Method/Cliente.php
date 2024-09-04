<?php

require_once 'FactoryPizza.php';

$QUATRO_QUEIJOS = FactoryPizza::criarRefrigerante('4 Queijos');
echo "Jorge pediu: " . $QUATRO_QUEIJOS -> getNome();
echo " | ";


$CATU_FRANGO = FactoryPizza::criarRefrigerante('Catu Frango');
echo "Maria Vitoria pediu: " . $CATU_FRANGO->getNome();
echo " | ";

echo $QUATRO_QUEIJOS -> comer() . "\n";
echo " | ";
echo $CATU_FRANGO -> comer() . "\n";

?>
