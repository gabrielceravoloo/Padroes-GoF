<?php

class Memento
{
  private $estado;

  public function __construct($estado)
  {
    $this -> estado = $estado;
  }

  public function getEstado()
  {
    return $this -> estado;
  }

  public function setEstado($estado)
  {
    $this -> estado = $estado;
  }
}
?>
