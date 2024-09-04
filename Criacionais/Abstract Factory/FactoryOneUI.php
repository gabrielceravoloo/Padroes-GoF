<?php

include_once 'AbstractFactory.php';
include_once 'NotificacaoOneUI.php';

class FactoryOneUI implements AbstractFactory 
{
    public function getUI(): UI 
    {
        return new NotificacaoOneUI();
    }
}
?>
