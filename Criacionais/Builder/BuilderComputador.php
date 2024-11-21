<?php

require_once 'Computador.php';

class BuilderComputador 
{
    private $computador;

    public function __construct() 
    {
        $this -> computador = new Computador();
    }

    public function setProcessador($processador) 
    {
        $this -> computador -> setProcessador($processador);
        return $this;
    }

    public function setRam($ram) 
    {
        $this -> computador->setRam($ram);
        return $this;
    }

    public function setArmazenamento($armazenamento) 
    {
        $this -> computador -> setArmazenamento($armazenamento);
        return $this;
    }

    public function setGpu($gpu) 
    {
        $this -> computador -> setGpu($gpu);
        return $this;
    }

    public function build() 
    {
        return $this -> computador;
    }
}
?>
