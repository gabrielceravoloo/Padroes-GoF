<?php

require_once 'Fonte.php';

class CaractereFlyweightFactory
{
  private $fontes = [];

  public function obterFonte($nome, $tamanho)
  {
    
    $key = $nome . $tamanho;

    if (!isset($this->fontes[$key])) 
    {
      $this->fontes[$key] = new Fonte($nome, $tamanho);
      echo "Criando nova fonte: {$nome}, 
            Tamanho: {$tamanho}<br>";
    } 
    else 
    {
      echo "Fonte existente: {$nome}, 
            Tamanho: {$tamanho}<br>";
    }

    return $this->fontes[$key];
  }
}
?>
