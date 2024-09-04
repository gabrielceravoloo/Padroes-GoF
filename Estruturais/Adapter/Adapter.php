<?php

// Traduz o arquivo .xml para ser lido como .json

class Adapter extends ArquivoXML
{
    function __construct($ArquivoXML)
    {
        parent::__construct($ArquivoXML);
    }

    // =========================================================================

    public function tradutorJSON()
    {
        if (file_exists($this->ArquivoXML)) 
        {
            $xml = simplexml_load_file($this->ArquivoXML); // Carrega o XML
            $json = json_encode($xml); // Converte o XML para JSON

            return $json;
        } 
        else 
        {
            return "Arquivo XML não encontrado!";
        }
    }
}
?>
