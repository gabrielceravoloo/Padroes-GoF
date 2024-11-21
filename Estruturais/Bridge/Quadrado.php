<?php

require_once 'Forma.php';
require_once 'Cor.php';

class Quadrado implements Forma 
{
    private $cor;

    public function __construct(Cor $cor)
    {
        $this -> cor = $cor;
    }

    public function desenhar()
    {
        echo "Desenhando um quadrado com a cor: " . $this -> cor -> preencher();
    }
}
?>
