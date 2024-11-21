<?php

require_once 'Documento.php';

class Relatorio implements Documento 
{
    private $titulo;
    private $conteudo;

    public function __construct($titulo, $conteudo) 
    {
        $this -> titulo = $titulo;
        $this -> conteudo = $conteudo;
    }

    public function exibir() 
    {
        echo "Relatório: " . $this -> titulo . "<br>Conteúdo: " . $this -> conteudo . "<br>";
    }

    public function clonar() 
    {
        return new Relatorio($this -> titulo, $this -> conteudo);
    }
}
?>
