<?php

class ArquivoXML
{

  protected $ArquivoXML;

  function __construct($ArquivoXML)
  {
    $this -> ArquivoXML = $ArquivoXML;
  }

  function lerArquivoXML()
  {
    return file_get_contents($this->ArquivoXML);
  }
}

?>

