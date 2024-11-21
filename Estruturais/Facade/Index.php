<?php

require_once 'SistemaPedidoFacade.php';

$facade = new SistemaPedidoFacade();

$facade -> processarPedido("Camiseta", 3, "Cartão de Crédito");

?>
