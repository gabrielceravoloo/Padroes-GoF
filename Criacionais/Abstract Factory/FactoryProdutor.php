<?php

include_once 'FactoryAndroidStock.php';
include_once 'FactoryOneUI.php';

class FactoryProdutor 
{
    public static function getFactory($tipo): AbstractFactory 
    {
        if ($tipo === "android") 
        {
            return new FactoryAndroidStock();
        } 
        else if ($tipo === "oneui") 
        {
            return new FactoryOneUI();
        } 
        else {
            throw new Exception("Factory desconhecido!");
        }
    }
}
?>
