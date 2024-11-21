<?php

require_once 'Atendente.php';

class AtendenteNivel1 extends Atendente
{
  public function tratarProblema($problema)
  {
    if ($problema == "Problema simples") 
    {
      echo "Atendente Nível 1: Resolvido problema simples<br>";
    } 
    elseif ($this -> proximoAtendente != null) 
    {
      echo "Atendente Nível 1: Encaminhando para o próximo atendente<br>";
      $this -> proximoAtendente -> tratarProblema($problema);
    }
  }
}
?>
