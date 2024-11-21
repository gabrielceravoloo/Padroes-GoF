<?php

require_once 'Memento.php';

class Origem
{
  private $estado;

  public function setEstado($estado)
  {
    $this->estado = $estado;
    echo "Estado definido para: " . $this->estado . "\n";
  }

  public function getEstado()
  {
    return $this->estado;
  }

  public function criarMemento()
  {
    return new Memento($this->estado);
  }

  public function restaurarMemento(Memento $memento)
  {
    $this->estado = $memento->getEstado();
    echo "Estado restaurado para: " . $this->estado . "\n";
  }
}
?>
