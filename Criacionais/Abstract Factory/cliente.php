<?php

include_once 'FactoryProdutor.php';

class Cliente 
{
    public static function main() 
    {
        // Factory Android Stock
        $factoryAndroid = FactoryProdutor::getFactory("android");
        $uiAndroid = $factoryAndroid->getUI();
        $uiAndroid->exibir();

        // Factory One UI
        $factoryOneUI = FactoryProdutor::getFactory("oneui");
        $uiOneUI = $factoryOneUI->getUI();
        $uiOneUI->exibir();
    }
}

Cliente::main();
?>
