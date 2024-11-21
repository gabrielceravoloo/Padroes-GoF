<?php

require_once 'Algoritmo.php';

class EstrategiaMultiplicacao implements Algoritmo
{
  public function executar($a, $b)
  {
    return $a * $b;
  }
}
?>
