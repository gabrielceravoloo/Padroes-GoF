<?php

require_once 'Dispositivo.php';

class Laptop implements Dispositivo 
{
    private $modelo;
    private $memoriaRAM;

    public function __construct($modelo, $memoriaRAM) 
    {
        $this -> modelo = $modelo;
        $this -> memoriaRAM = $memoriaRAM;
    }

    public function getDescricao() 
    {
        return "Laptop modelo " . $this -> modelo . " com " . $this->memoriaRAM . " de memória RAM";
    }
}
?>
