<?php

require_once 'Forma.php';
require_once 'Cor.php';

class Circulo implements Forma 
{
    private $cor;

    public function __construct(Cor $cor)
    {
        $this -> cor = $cor;
    }

    public function desenhar()
    {
        echo "Desenhando um círculo com a cor: " . $this -> cor -> preencher();
    }
}
?>
