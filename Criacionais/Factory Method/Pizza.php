<?php

abstract class Pizza 
{
    protected $nome;

    public function __construct() 
    {
        $this->nome = "Pizza Aleatoria";
    }

    public function getNome() 
    {
        return $this->nome;
    }

    public function setNome($nome) 
    {
        $this->nome = $nome;
    }

    abstract public function comer();

}
?>
