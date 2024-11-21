<?php

class Estoque
{
  public function verificarEstoque($produto, $quantidade)
  {
    echo "Verificando estoque para o produto: $produto...<br>";
    return $quantidade <= 10;
  }
}
?>
