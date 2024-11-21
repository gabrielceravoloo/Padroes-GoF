<?php

require_once 'Subject.php';
require_once 'ObserverConcretoA.php';
require_once 'ObserverConcretoB.php';
require_once 'ObserverConcretoC.php';

$subject = new Subject();

$observerA = new ObserverConcretoA("Observador A");
$observerB = new ObserverConcretoB("Observador B");
$observerC = new ObserverConcretoC("Observador C");

$subject -> registrarObserver($observerA);
$subject -> registrarObserver($observerB);
$subject -> registrarObserver($observerC);

echo "Notificando todos os observadores:\n";
$subject -> notificarObservers();

$subject -> cancelarRegistroObserver($observerB);

echo "\nNotificando os observadores após o cancelamento de Observer B:\n";
$subject -> notificarObservers();

$observerA -> setNome("Novo Observador A");
echo "\nApós alterar o nome do Observador A:\n";
$subject -> notificarObservers();
?>
