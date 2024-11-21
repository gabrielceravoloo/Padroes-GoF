<?php

require_once 'Documento.php';

class Contrato implements Documento 
{
    private $partes;
    private $clausulas;

    public function __construct($partes, $clausulas) 
    {
        $this -> partes = $partes;
        $this -> clausulas = $clausulas;
    }

    public function exibir() 
    {
        echo "Contrato entre: " . $this -> partes . "<br>Cláusulas: " . $this -> clausulas . "<br>";
    }

    public function clonar() 
    {
        return new Contrato($this -> partes, $this -> clausulas);
    }
}
?>
