<?php

class Fonte
{
  private $nome;
  private $tamanho;

  public function __construct($nome, $tamanho)
  {
    $this -> nome = $nome;
    $this -> tamanho = $tamanho;
  }

  // ===========================================================================
  
  public function getNome()
  {
    return $this -> nome;
  }

  public function getTamanho()
  {
    return $this -> tamanho;
  }

  // ===========================================================================

  public function exibir()
  {
    echo "Fonte: {$this -> nome}, 
          Tamanho: {$this -> tamanho}<br>";
  }
}
?>
