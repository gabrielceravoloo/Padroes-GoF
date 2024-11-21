<?php

require_once 'Circulo.php';
require_once 'Quadrado.php';
require_once 'Vermelho.php';
require_once 'Azul.php';

$vermelho = new Vermelho();
$azul = new Azul();

$circuloVermelho = new Circulo($vermelho);
$quadradoAzul = new Quadrado($azul);

$circuloVermelho -> desenhar();
$quadradoAzul -> desenhar();
?>
