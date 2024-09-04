<?php

require_once 'Pizza.php';

class PizzaCATU_FRANGO extends Pizza 
{
    public function __construct() 
    {
        $this->nome = "Pizza Catu Frango";
    }

    public function comer() 
    {
        return "Nossa, que " . $this->$nome . " deliciosa!";
    }

    public function setNome($nome) 
    {
        $this->nome = $nome;
    }
}
?>
