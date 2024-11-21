<?php

require_once 'EstadoConcretoA.php';
require_once 'EstadoConcretoB.php';

class Objeto
{
    private $estado;

    public function __construct()
    {
      $this -> estado = new EstadoConcretoA($this);
    }

    public function executar()
    {
      $this -> estado -> executar();
    }

    public function setEstado(Estado $estado)
    {
      $this -> estado = $estado;
    }

    public function getEstado()
    {
      return $this -> estado;
    }
}
?>
