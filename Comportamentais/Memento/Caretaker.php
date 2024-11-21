<?php

require_once 'Memento.php';

class Caretaker
{
  private $mementos = [];

  public function adicionarMemento(Memento $memento)
  {
    $this -> mementos[] = $memento;
  }

  public function obterMemento($indice)
  {
    return $this -> mementos[$indice];
  }
}
?>
