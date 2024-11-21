<?php

require_once 'Visitante.php';
require_once 'Funcionario.php';
require_once 'Departamento.php';

class VisitanteCalculadora implements Visitante
{
  public function visitarFuncionario(Funcionario $funcionario)
  {
    $novoSalario = $funcionario -> getSalario() * 1.10;
    echo "Salário de " . $funcionario -> getNome() . " com aumento: R$ " . $novoSalario . "\n";
  }

  public function visitarDepartamento(Departamento $departamento)
  {
    $totalBonus = 0;
    foreach ($departamento -> getFuncionarios() as $funcionario) 
    {
        $totalBonus += $funcionario -> getSalario() * 0.05;
    }
    echo "Bônus total do departamento " . $departamento -> getNome() . ": R$ " . $totalBonus . "\n";
  }
}
?>
