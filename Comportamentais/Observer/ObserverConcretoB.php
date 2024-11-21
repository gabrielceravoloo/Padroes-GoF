<?php

require_once 'Observer.php';

class ObserverConcretoB implements Observer
{
    private $nome;

    public function __construct($nome)
    {
      $this -> nome = $nome;
    }

    public function notificar()
    {
      echo $this -> nome . " foi notificado!\n";
    }

    // =========================================================================
    
    public function getNome()
    {
      return $this -> nome;
    }

    public function setNome($nome)
    {
      $this -> nome = $nome;
    }
}
?>
