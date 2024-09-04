<?php

Class Memoria 
{
    public $capacidade;

    function __construct($capacidade)
    {
        $this -> capacidade = $capacidade;
    }
    
    function carregar()
    {
        echo "Dados da memória carregados...<br>";
    }
    function liberar()
    {
        echo "Dados da memória liberados...<br>";
    }
}

?>