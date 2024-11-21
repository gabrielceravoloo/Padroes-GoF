<?php

require_once 'FabricaPdfDocumento.php';
require_once 'FabricaWordDocumento.php';

function abrirDocumento(FabricaDocumento $fabrica) 
{
    $fabrica -> abrirDocumento();
}

echo "Abrindo documentos: <br>";

abrirDocumento(new FabricaPdfDocumento());
abrirDocumento(new FabricaWordDocumento());

?>
