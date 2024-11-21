<?php

require_once 'Contexto.php';
require_once 'EstrategiaSoma.php';
require_once 'EstrategiaSubtracao.php';
require_once 'EstrategiaMultiplicacao.php';

$contexto = new Contexto(new EstrategiaSoma());
echo "Resultado da soma: " . $contexto -> executarOperacao(5, 3) . "\n";

$contexto -> setEstrategia(new EstrategiaSubtracao());
echo "Resultado da subtração: " . $contexto -> executarOperacao(5, 3) . "\n";

$contexto -> setEstrategia(new EstrategiaMultiplicacao());
echo "Resultado da multiplicação: " . $contexto -> executarOperacao(5, 3) . "\n";
?>
