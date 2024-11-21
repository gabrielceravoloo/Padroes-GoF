<?php

require_once 'FabricaDispositivos.php';
require_once 'Smartphone.php';
require_once 'Laptop.php';

class FabricaApple implements FabricaDispositivos 
{
    public function criarSmartphone() 
    {
        return new Smartphone("iPhone 14", 6.1);
    }

    public function criarLaptop() 
    {
        return new Laptop("MacBook Pro", "16GB");
    }
}
?>
