<?php

require_once 'AtendenteNivel1.php';
require_once 'AtendenteNivel2.php';
require_once 'AtendenteNivel3.php';

$atendenteNivel1 = new AtendenteNivel1();
$atendenteNivel2 = new AtendenteNivel2();
$atendenteNivel3 = new AtendenteNivel3();

$atendenteNivel1 -> setProximoAtendente($atendenteNivel2);
$atendenteNivel2 -> setProximoAtendente($atendenteNivel3);

echo "Testando problema simples:<br>";
$atendenteNivel1 -> tratarProblema("Problema simples");

echo "<br>Testando problema técnico:<br>";
$atendenteNivel1 -> tratarProblema("Problema técnico");

echo "<br>Testando problema complexo:<br>";
$atendenteNivel1 -> tratarProblema("Problema complexo");

echo "<br>Testando problema desconhecido:<br>";
$atendenteNivel1 -> tratarProblema("Problema desconhecido");
?>
