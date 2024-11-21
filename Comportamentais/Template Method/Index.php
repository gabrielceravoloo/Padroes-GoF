<?php

require_once 'Cha.php';
require_once 'Cafe.php';

$cha = new Cha();
echo "Preparando Chá:\n";
$cha -> prepararBebida();
echo "\n";

$cafe = new Cafe();
echo "Preparando Café:\n";
$cafe -> prepararBebida();
?>
