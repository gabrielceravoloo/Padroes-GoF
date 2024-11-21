<?php

class ControleRemoto
{
  private $comando;

  public function setComando(Comando $comando)
  {
    $this -> comando = $comando;
  }

  public function pressionarBotao()
  {
    $this -> comando -> executar();
  }
}
?>
