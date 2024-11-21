<?php

require_once 'Funcionario.php';
require_once 'Departamento.php';
require_once 'VisitanteCalculadora.php';

$funcionario1 = new Funcionario("João", 3000);
$funcionario2 = new Funcionario("Maria", 4000);

$departamento = new Departamento("TI");
$departamento->adicionarFuncionario($funcionario1);
$departamento->adicionarFuncionario($funcionario2);

$visitante = new VisitanteCalculadora();

echo "Visitando funcionários:\n";
$funcionario1->aceitar($visitante);
$funcionario2->aceitar($visitante);

echo "\nVisitando departamento:\n";
$departamento->aceitar($visitante);
?>
