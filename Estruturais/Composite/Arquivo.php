<?php

require_once 'Componente.php';

class Arquivo implements Componente 
{
  private $nome;

  public function __construct($nome) 
  {
      $this -> nome = $nome;
  }

  public function exibir($nivel) 
  {
    echo str_repeat("-", $nivel) . $this -> nome . "<br>";
  }
}
?>
