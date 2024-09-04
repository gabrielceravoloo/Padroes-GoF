<?php

require_once "CPU.php";
require_once "SSD.php";
require_once "Memoria.php";
require_once "ComputadorFacade.php";

$cpu = new CPU("Intel Core i7");
$memoria = new Memoria("16GB");
$ssd = new SSD("1TB");

$computador = new ComputadorFacade($cpu, $memoria, $ssd);
$computador->ligarComputador();

?>
