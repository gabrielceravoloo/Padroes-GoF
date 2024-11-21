<?php

require_once 'Relatorio.php';
require_once 'Contrato.php';

function clonarEExibir(Documento $documento) 
{
    $documentoClonado = $documento -> clonar();
    $documentoClonado -> exibir();
}

$relatorioOriginal = new Relatorio("Vendas Anuais", "Este relatório contém os dados de vendas anuais...");
$contratoOriginal = new Contrato("Empresa A e Empresa B...");

echo "Documento Original:<br>";
$relatorioOriginal -> exibir();
$contratoOriginal -> exibir();

echo "<br>Documento Clonado:<br>";
clonarEExibir($relatorioOriginal);
clonarEExibir($contratoOriginal);
?>
