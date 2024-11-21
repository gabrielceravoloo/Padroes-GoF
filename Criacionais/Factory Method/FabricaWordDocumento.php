<?php

require_once 'FabricaDocumento.php';
require_once 'WordDocumento.php';

class FabricaWordDocumento extends FabricaDocumento 
{
    public function criarDocumento() 
    {
        return new WordDocumento();
    }
}
?>
