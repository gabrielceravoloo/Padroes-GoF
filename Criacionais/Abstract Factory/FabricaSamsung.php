<?php

require_once 'FabricaDispositivos.php';
require_once 'Smartphone.php';
require_once 'Laptop.php';

class FabricaSamsung implements FabricaDispositivos 
{
    public function criarSmartphone() 
    {
        return new Smartphone("Galaxy S21", 6.2);
    }

    public function criarLaptop() 
    {
        return new Laptop("Galaxy Book", "8GB");
    }
}
?>
