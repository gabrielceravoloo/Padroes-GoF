<?php

class ConversorXml 
{
  public function converter($dados) 
  {
    $xml = new SimpleXMLElement('<root/>');
    $this -> arrayParaXml($dados, $xml);
    return $xml -> asXML();
  }

  private function arrayParaXml($dados, &$xml) 
  {
    foreach ($dados as $chave => $valor) 
    {
      if (is_array($valor)) 
      {
        $subnode = $xml -> addChild("$chave");
        $this -> arrayParaXml($valor, $subnode);
      } 
      else 
      {
        $xml -> addChild("$chave", htmlspecialchars("$valor"));
      }
    }
  }
}
?>
