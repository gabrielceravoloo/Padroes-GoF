<?php

require_once 'Colaborador.php';
require_once 'ConcreteMediator.php';

$mediador = new ConcreteMediator();

$colaboradorA = new Colaborador("Colaborador A", $mediador);
$colaboradorB = new Colaborador("Colaborador B", $mediador);
$colaboradorC = new Colaborador("Colaborador C", $mediador);

$mediador -> registrarColaborador($colaboradorA);
$mediador -> registrarColaborador($colaboradorB);
$mediador -> registrarColaborador($colaboradorC);

$colaboradorA -> enviarMensagem("Olá, colegas!");
$colaboradorB -> enviarMensagem("Como estão todos?");
$colaboradorC -> enviarMensagem("Vamos fazer um brainstorming amanhã!");

$colaboradorC -> setNome("Colaborador C Atualizado");
echo "\nNome do colaborador C atualizado:\n";
$colaboradorC -> enviarMensagem("Agora, meu nome foi atualizado!");
?>
