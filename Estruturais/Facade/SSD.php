<?php

Class SSD
{
    public $capacidade;

    function __construct($capacidade)
    {
        $this -> capacidade = $capacidade;
    }
    
    function ler()
    {
        echo "Dados do SSD lidos...<br>";
    }
    function escrever()
    {
        echo "Dados escritos no SSD...<br>";
    }
}

?>