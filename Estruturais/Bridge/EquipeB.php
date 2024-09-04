<?php

require_once 'Equipe.php';

class EquipeB implements Equipe {

    public function trabalharNoProjeto($nomeProjeto) 
    {
        echo "Equipe B está trabalhando no projeto: " . $nomeProjeto;
    }

}
?>
