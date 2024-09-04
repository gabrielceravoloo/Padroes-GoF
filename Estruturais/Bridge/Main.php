<?php
require_once 'EquipeA.php';
require_once 'EquipeB.php';
require_once 'ProjetoSoftware.php';

$equipeA = new EquipeA();
$equipeB = new EquipeB();

$projeto1 = new ProjetoSoftware($equipeA, "Sistema de Gestão");
$projeto2 = new ProjetoSoftware($equipeB, "Aplicativo Móvel");
$projeto1->iniciarProjeto();
$projeto2->iniciarProjeto();

?>
