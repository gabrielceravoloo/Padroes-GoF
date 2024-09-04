<?php

require_once 'Equipe.php';

abstract class Projeto {

    protected $equipe;

    function __construct(Equipe $equipe) 
    {
        $this->equipe = $equipe;
    }

    abstract function iniciarProjeto();
}
?>
