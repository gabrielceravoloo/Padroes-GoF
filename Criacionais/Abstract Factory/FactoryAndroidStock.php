<?php

include_once 'AbstractFactory.php';
include_once 'NotificacaoAndroidStock.php';

class FactoryAndroidStock implements AbstractFactory 
{
    public function getUI(): UI 
    {
        return new NotificacaoAndroidStock();
    }
}
?>
