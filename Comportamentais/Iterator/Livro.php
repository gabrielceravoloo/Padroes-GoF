<?php

class Livro
{
  private $titulo;

  public function __construct($titulo)
  {
    $this -> titulo = $titulo;
  }

  public function getTitulo()
  {
    return $this -> titulo;
  }

  public function setTitulo($titulo)
  {
    $this -> titulo = $titulo;
  }
}
?>
