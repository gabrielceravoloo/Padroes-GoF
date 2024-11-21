<?php

require_once 'Caractere.php';
require_once 'Fonte.php';
require_once 'CaractereFlyweightFactory.php';

$flyweightFactory = new CaractereFlyweightFactory();

$fonte1 = $flyweightFactory->obterFonte('Arial', 12);
$fonte2 = $flyweightFactory->obterFonte('Consolas', 12);
$fonte3 = $flyweightFactory->obterFonte('Times', 14);

$caractere1 = new Caractere('A', 0, 0);
$caractere2 = new Caractere('B', 10, 0);
$caractere3 = new Caractere('C', 20, 0);
$caractere4 = new Caractere('D', 30, 0);

$caractere1->exibir();
$fonte1->exibir();

$caractere2->exibir();
$fonte1->exibir();

$caractere3->exibir();
$fonte3->exibir();

$caractere4->exibir();
$fonte2->exibir();

?>
