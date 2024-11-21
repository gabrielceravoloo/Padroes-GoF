<?php

require_once 'Atendente.php';

class AtendenteNivel3 extends Atendente
{
  public function tratarProblema($problema)
  {
    if ($problema == "Problema complexo") 
    {
      echo "Atendente Nível 3: Resolvido problema complexo<br>";
    } 
    elseif ($this->proximoAtendente != null) 
    {
      echo "Atendente Nível 3: Não consegue resolver, problema escalado<br>";
    }
  }
}
?>
