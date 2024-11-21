<?php

require_once 'Componente.php';

class Pasta implements Componente 
{
  private $nome;
  private $itens = [];

  public function __construct($nome) 
  {
    $this -> nome = $nome;
  }

  public function adicionarComponente(Componente $componente) 
  {
    $this -> itens[] = $componente;
  }

  public function exibir($nivel) 
  {
    echo str_repeat("-", $nivel) . $this->nome . "/<br>";

    foreach ($this -> itens as $item) 
    {
      $item->exibir($nivel + 2);
    }
  }
}
?>
