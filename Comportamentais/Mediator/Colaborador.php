<?php

require_once 'Mediator.php';

class Colaborador
{
  private $nome;
  private $mediador;

  public function __construct($nome, Mediator $mediador)
  {
    $this -> nome = $nome;
    $this -> mediador = $mediador;
  }

  public function enviarMensagem($mensagem)
  {
    echo $this -> nome . " enviou a mensagem: $mensagem\n";
    $this -> mediador->notificar($this, $mensagem);
  }

  public function receberMensagem($mensagem)
  {
    echo $this->nome . " recebeu a mensagem: $mensagem\n";
  }

  // ===========================================================================

  public function getNome()
  {
    return $this -> nome;
  }

  public function setNome($nome)
  {
    $this -> nome = $nome;
  }
}
?>
