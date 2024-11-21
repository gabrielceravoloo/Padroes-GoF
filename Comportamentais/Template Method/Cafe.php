<?php

require_once 'Bebida.php';

class Cafe extends Bebida
{
  protected function adicionarIngrediente()
  {
    echo "Adicionando café...\n";
  }
  protected function misturar()
  {
    echo "Mexendo o café...\n";
  }
}
?>
