<?php

Class CPU 
{
    public $modelo;

    function __construct($modelo)
    {
        $this -> modelo = $modelo;
    }

    function inicilizar()
    {
        echo "Processador " . $this -> modelo . " inicializado...<br>";
    }
    function executar()
    {
        echo "Processador " . $this -> modelo . " executado...<br>";
    }
    function carregar()
    {
        echo "Registradores " . $this -> modelo . " carregados...<br>";
    }
    function liberar()
    {
        echo "Registradores " . $this -> modelo . " liberados...<br>";
    }
}

?>