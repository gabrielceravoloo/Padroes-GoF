<?php

require_once 'Atendente.php';

class AtendenteNivel2 extends Atendente
{
  public function tratarProblema($problema)
  {
    if ($problema == "Problema técnico") 
    {
      echo "Atendente Nível 2: Resolvido problema técnico<br>";
    } 
    elseif ($this -> proximoAtendente != null) 
    {
      echo "Atendente Nível 2: Encaminhando para o próximo atendente<br>";
      $this -> proximoAtendente -> tratarProblema($problema);
    }
  }
}
?>
