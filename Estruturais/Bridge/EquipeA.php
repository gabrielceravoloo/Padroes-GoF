<?php

require_once 'Equipe.php';

class EquipeA implements Equipe {

    public function trabalharNoProjeto($nomeProjeto) 
    {
        echo "Equipe A está trabalhando no projeto: " . $nomeProjeto;
    }

}
?>
