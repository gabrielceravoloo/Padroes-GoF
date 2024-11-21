<?php

class Caractere
{
  private $conteudo;
  private $posicaoX;
  private $posicaoY;

  public function __construct($conteudo, $posicaoX, $posicaoY)
  {
      $this -> conteudo = $conteudo;
      $this -> posicaoX = $posicaoX;
      $this -> posicaoY = $posicaoY;
  }

  // ===========================================================================

  public function getConteudo()
  {
      return $this -> conteudo;
  }

  public function getPosicaoX()
  {
      return $this -> posicaoX;
  }

  public function getPosicaoY()
  {
      return $this -> posicaoY;
  }

  // ===========================================================================

  public function exibir()
  {
      echo "Caractere: {$this->conteudo}, 
            Posição: ({$this->posicaoX}, {$this->posicaoY})<br>";
  }
}
?>
