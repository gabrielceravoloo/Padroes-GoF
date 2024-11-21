<?php

abstract class Atendente
{
  protected $proximoAtendente;

  public function setProximoAtendente($proximoAtendente)
  {
    $this -> proximoAtendente = $proximoAtendente;
  }

  abstract public function tratarProblema($problema);
}
?>
