<?php

abstract class FabricaDocumento 
{
    abstract public function criarDocumento();

    public function abrirDocumento() 
    {
        $documento = $this -> criarDocumento();
        $documento -> abrir();
    }
}
?>
