<?php

require_once 'Dispositivo.php';

class Smartphone implements Dispositivo 
{
    private $modelo;
    private $tamanhoTela;

    public function __construct($modelo, $tamanhoTela) 
    {
        $this -> modelo = $modelo;
        $this -> tamanhoTela = $tamanhoTela;
    }

    public function getDescricao() 
    {
        return "Smartphone modelo " . $this -> modelo . " com tela de " . $this->tamanhoTela . " polegadas";
    }
}
?>
