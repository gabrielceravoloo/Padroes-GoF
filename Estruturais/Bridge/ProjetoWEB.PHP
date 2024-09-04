<?php

require_once 'Projeto.php';

class ProjetoSoftware extends Projeto {

    private $nomeProjeto;

    public function __construct(Equipe $equipe, $nomeProjeto) 
    {
        parent::__construct($equipe);
        $this -> nomeProjeto = $nomeProjeto;
    }

    public function iniciarProjeto() 
    {
        echo "Iniciando o projeto de software: " . $this -> nomeProjeto;
        $this -> equipe -> trabalharNoProjeto($this -> nomeProjeto);
    }
}
?>
