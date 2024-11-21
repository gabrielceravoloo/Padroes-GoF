<?php

class Notificacao
{
  protected $mensagem;

  public function __construct($mensagem)
  {
    $this -> mensagem = $mensagem;
  }

  public function enviar()
  {
    echo "Mensagem: " . $this -> mensagem . "<br>";
  }
}
?>
