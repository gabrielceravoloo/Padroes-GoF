<?php

require_once 'Algoritmo.php';

class EstrategiaSubtracao implements Algoritmo
{
  public function executar($a, $b)
  {
    return $a - $b;
  }
}
?>
