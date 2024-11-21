<?php

require_once 'Visitante.php';

class Departamento
{
  private $nome;
  private $funcionarios;

  public function __construct($nome)
  {
    $this -> nome = $nome;
    $this -> funcionarios = [];
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

  public function getFuncionarios()
  {
    return $this -> funcionarios;
  }

  public function adicionarFuncionario(Funcionario $funcionario)
  {
    $this -> funcionarios[] = $funcionario;
  }

  public function aceitar(Visitante $visitante)
  {
      $visitante -> visitarDepartamento($this);
  }
}
?>
