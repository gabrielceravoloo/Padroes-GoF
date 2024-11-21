<?php

require_once 'Estado.php';

class EstadoConcretoA implements Estado
{
  private $objeto;

  public function __construct($objeto)
  {
    $this -> objeto = $objeto;
  }

  public function executar()
  {
    echo "Executando ação no estado A\n";
    $this -> objeto -> setEstado(new EstadoConcretoB($this -> objeto));
  }
}
?>
