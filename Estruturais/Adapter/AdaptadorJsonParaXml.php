<?php

require_once 'ConversorJson.php';
require_once 'ConversorXml.php';

class AdaptadorJsonParaXml extends ConversorXml 
{
  private $conversorJson;

  public function __construct(ConversorJson $conversorJson) 
  {
    $this -> conversorJson = $conversorJson;
  }

  public function converter($dados) 
  {
    $array = $this -> conversorJson -> converterParaArray($dados);
    return parent::converter($array);
  }
}
?>
