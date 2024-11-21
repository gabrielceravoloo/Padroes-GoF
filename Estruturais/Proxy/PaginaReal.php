<?php

class PaginaReal
{
    private $conteudo;

    public function __construct($conteudo)
    {
        $this -> conteudo = $conteudo;
    }

    public function exibir()
    {
        echo "Exibindo conteúdo da página: {$this -> conteudo}<br>";
    }
}
?>
