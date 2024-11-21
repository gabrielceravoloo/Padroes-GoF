<?php

require_once 'Bebida.php';

class Cha extends Bebida
{
  protected function adicionarIngrediente()
  {
    echo "Adicionando chá...\n";
  }
  protected function misturar()
  {
    echo "Mexendo o chá...\n";
  }
}
?>
