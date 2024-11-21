<?php

require_once 'Lampada.php';
require_once 'ComandoLampadaAcender.php';
require_once 'ComandoLampadaApagar.php';
require_once 'ControleRemoto.php';

$lampada = new Lampada();

$comandoAcender = new ComandoLampadaAcender($lampada);
$comandoApagar = new ComandoLampadaApagar($lampada);

$controleRemoto = new ControleRemoto();

echo "Comando para acender a lâmpada:<br>";
$controleRemoto->setComando($comandoAcender);
$controleRemoto->pressionarBotao();

echo "<br>Comando para apagar a lâmpada:<br>";
$controleRemoto->setComando($comandoApagar);
$controleRemoto->pressionarBotao();
?>
