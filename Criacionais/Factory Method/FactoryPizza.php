<?php

require_once 'PizzaQUATRO_QUEIJOS.php';
require_once 'PizzaCATU_FRANGO.php';

class FactoryPizza
{
    public static function criarPizza($tipo) 
    {
        switch(strtolower($tipo))
        {
            case '4 queijos':
            case 'quatro queijos':
                return new PizzaQUATRO_QUEIJOS();
                break;
            case 'catu-frango':
                return new PizzaCATU_FRANGO();
                break;
            default:
                throw new Exception("Não temos esse tipo de pizza por aqui!");
        }
    }
}

?>
