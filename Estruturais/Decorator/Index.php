<?php

require_once 'Notificacao.php';
require_once 'NotificacaoEmail.php';
require_once 'NotificacaoSMS.php';
require_once 'NotificacaoPush.php';

$notificacao = new Notificacao("Você tem uma nova mensagem!");
$notificacaoEmail = new NotificacaoEmail($notificacao);
$notificacaoSMS = new NotificacaoSMS($notificacaoEmail);
$notificacaoPush = new NotificacaoPush($notificacaoSMS);

$notificacaoPush -> enviar();
?>
