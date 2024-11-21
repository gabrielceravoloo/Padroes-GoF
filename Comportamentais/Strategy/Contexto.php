<?php

require_once 'Algoritmo.php';

class Contexto
{
  private $estrategia;

  public function __construct(Algoritmo $estrategia)
  {
    $this -> estrategia = $estrategia;
  }

  public function setEstrategia(Algoritmo $estrategia)
  {
    $this -> estrategia = $estrategia;
  }

  public function executarOperacao($a, $b)
  {
    return $this -> estrategia -> executar($a, $b);
  }

  public function getEstrategia()
  {
    return $this -> estrategia;
  }
}
?>
