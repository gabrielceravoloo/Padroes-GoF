<?php

require_once 'Iterador.php';

class Biblioteca implements Iterador
{
  private $livros = [];
  private $indice = 0;

  public function __construct(array $livros = [])
  {
    $this -> livros = $livros;
  }

  // ===========================================================================

  public function primeiro()
  {
    $this -> indice = 0;
  }

  public function proximo()
  {
    $this -> indice++;
  }

  public function atual()
  {
    return $this -> livros[$this -> indice];
  }

  public function fim()
  {
    return $this -> indice >= count($this->livros);
  }

  // ===========================================================================

  public function getLivros()
  {
    return $this -> livros;
  }

  public function setLivros(array $livros)
  {
    $this -> livros = $livros;
  }

  // ===========================================================================

  public function adicionarLivro(Livro $livro)
  {
    $this -> livros[] = $livro;
  }
}
?>
