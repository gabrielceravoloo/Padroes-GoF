<?php

require_once 'FabricaDocumento.php';
require_once 'PdfDocumento.php';

class FabricaPdfDocumento extends FabricaDocumento 
{
    public function criarDocumento() 
    {
        return new PdfDocumento();
    }
}
?>
