<?php

abstract class Bebida
{
  public function prepararBebida()
  {
    $this -> esquentarAgua();
    $this -> adicionarIngrediente();
    $this -> despejarEmCopo();
    $this -> misturar();
  }

  protected function esquentarAgua()
  {
    echo "Aquecendo a água...\n";
  }

  abstract protected function adicionarIngrediente();

  protected function despejarEmCopo()
  {
    echo "Despejando a bebida no copo...\n";
  }

  abstract protected function misturar();
}
?>
