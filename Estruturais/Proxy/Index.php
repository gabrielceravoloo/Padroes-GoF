<?php

require_once 'PaginaProxy.php';

$usuarioAutenticado = true;
$paginaProxy = new PaginaProxy($usuarioAutenticado);
$paginaProxy -> exibir();

$usuarioAutenticado = false;
$paginaProxy = new PaginaProxy($usuarioAutenticado);
$paginaProxy -> exibir();
?>
