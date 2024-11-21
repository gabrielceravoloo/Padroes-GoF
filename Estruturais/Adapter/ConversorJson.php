<?php

class ConversorJson 
{
  public function converterParaArray($json) 
  {
    return json_decode($json, true);
  }
}
?>
