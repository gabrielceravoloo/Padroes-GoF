<?php

require_once 'Mediator.php';
require_once 'Colaborador.php';

class ConcreteMediator implements Mediator
{
  private $colaboradores = [];

  public function registrarColaborador(Colaborador $colaborador)
  {
    $this -> colaboradores[] = $colaborador;
  }

  public function notificar($origem, $mensagem)
  {
    foreach ($this -> colaboradores as $colaborador) 
    {
      if ($colaborador !== $origem) 
      {
        $colaborador->receberMensagem($mensagem);
      }
    }
  }

  // ===========================================================================

  public function getColaboradores()
  {
    return $this->colaboradores;
  }

  public function setColaboradores(array $colaboradores)
  {
    $this->colaboradores = $colaboradores;
  }
}
?>
