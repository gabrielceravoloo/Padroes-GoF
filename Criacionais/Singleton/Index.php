<?php

require_once 'Configuracao.php';

$configuracao = Configuracao::getInstancia();

$configuracao -> set('db_host', 'localhost');
$configuracao -> set('db_name', 'db_nome');
$configuracao -> set('db_user', 'root');
$configuracao -> set('db_pass', 'senha');

echo "Host do Banco de Dados: " . $configuracao -> get('db_host') . "<br>";
echo "Nome do Banco de Dados: " . $configuracao -> get('db_name') . "<br>";
echo "Usuário do Banco de Dados: " . $configuracao -> get('db_user') . "<br>";
echo "Senha do Banco de Dados: " . $configuracao -> get('db_pass') . "<br>";

// Tentando obter outra instância e exibindo as configurações
$outraConfiguracao = Configuracao::getInstancia();
echo "<br>Host do Banco de Dados (Outra instância): " . $outraConfiguracao -> get('db_host');
?>
