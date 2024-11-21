<?php

require_once 'Documento.php';

class PdfDocumento implements Documento 
{
    public function abrir() 
    {
        echo "Abrindo documento PDF <br>";
    }
}
?>
