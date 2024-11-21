<?php

require_once 'Comando.php';
require_once 'Lampada.php';

class ComandoLampadaApagar implements Comando
{
  private $lampada;

  public function __construct(Lampada $lampada)
  {
    $this -> lampada = $lampada;
  }

  public function executar()
  {
    $this -> lampada -> apagar();
  }
}
?>
