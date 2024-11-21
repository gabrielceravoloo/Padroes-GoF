<?php

require_once 'Estado.php';

class EstadoConcretoB implements Estado
{
  private $objeto;

  public function __construct($objeto)
  {
    $this -> objeto = $objeto;
  }

  public function executar()
  {
    echo "Executando ação no estado A\n";
    $this -> objeto -> setEstado(new EstadoConcretoA($this -> objeto));
  }
}
?>
