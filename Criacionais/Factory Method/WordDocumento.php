<?php

require_once 'Documento.php';

class WordDocumento implements Documento 
{
    public function abrir() 
    {
        echo "Abrindo documento Word <br>";
    }
}
?>
