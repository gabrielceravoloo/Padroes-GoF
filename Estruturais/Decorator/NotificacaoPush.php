<?php

require_once 'Notificacao.php';

class NotificacaoPush extends Notificacao
{
    private $notificacao;

    public function __construct(Notificacao $notificacao)
    {
        $this -> notificacao = $notificacao;
    }

    public function enviar()
    {
        $this -> notificacao -> enviar();
        echo "Enviando notificação push...<br>";
    }
}
?>
