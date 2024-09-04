<?php
require_once 'Pizza.php';

class QUATRO_QUEIJOS extends Pizza 
{
    public function __construct()
    {
        $this->nome = "Pizza Quatro Queijos";
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
