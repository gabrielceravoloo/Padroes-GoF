<?php

require_once 'FabricaApple.php';
require_once 'FabricaSamsung.php';

function exibirDescricaoDispositivos(FabricaDispositivos $fabrica) 
{
    $smartphone = $fabrica -> criarSmartphone();
    $laptop = $fabrica -> criarLaptop();

    echo $smartphone -> getDescricao() . "<br>";
    echo $laptop -> getDescricao() . "<br>";
}

echo "Dispositivos Apple:<br>";
exibirDescricaoDispositivos(new FabricaApple());

echo "<br>Dispositivos Samsung:<br>";
exibirDescricaoDispositivos(new FabricaSamsung());
?>
