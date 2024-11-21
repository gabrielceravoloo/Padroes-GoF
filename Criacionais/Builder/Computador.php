<?php

class Computador 
{
  private $processador;
  private $ram;
  private $armazenamento;
  private $gpu;

  // =========================================================================

  public function __construct() {}

  // =========================================================================

  public function getProcessador() 
  { 
    return $this -> processador; 
  }
  public function getRam() 
  { 
    return $this -> ram; 
  }
  public function getArmazenamento() 
  { 
    return $this -> armazenamento; 
  }
  public function getGpu() 
  { 
    return $this -> gpu; 
  }

  // =========================================================================

  public function setProcessador($processador) 
  { 
    $this -> processador = $processador; 
  }
  public function setRam($ram) 
  { 
    $this -> ram = $ram; 
  }
  public function setArmazenamento($armazenamento) 
  { 
    $this -> armazenamento = $armazenamento; 
  }
  public function setGpu($gpu) 
  { 
    $this -> gpu = $gpu; 
  }
}
?>
