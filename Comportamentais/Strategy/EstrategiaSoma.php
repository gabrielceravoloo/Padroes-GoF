<?php

require_once 'Algoritmo.php';

class EstrategiaSoma implements Algoritmo
{
  public function executar($a, $b)
  {
    return $a + $b;
  }
}
?>
