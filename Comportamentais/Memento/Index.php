<?php

require_once 'Origem.php';
require_once 'Caretaker.php';

$origem = new Origem();
$caretaker = new Caretaker();

$origem->setEstado("Estado 1");
$caretaker->adicionarMemento($origem->criarMemento());

$origem->setEstado("Estado 2");
$caretaker->adicionarMemento($origem->criarMemento());

$origem->setEstado("Estado 3");
echo "Estado atual: " . $origem->getEstado() . "\n";

$origem->restaurarMemento($caretaker->obterMemento(0));
echo "Estado após restauração: " . $origem->getEstado() . "\n";

$origem->restaurarMemento($caretaker->obterMemento(1));
echo "Estado após restauração: " . $origem->getEstado() . "\n";
?>
