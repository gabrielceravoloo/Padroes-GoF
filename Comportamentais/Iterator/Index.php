<?php

require_once 'Biblioteca.php';
require_once 'Livro.php';

$livro1 = new Livro("O Senhor dos Anéis");
$livro2 = new Livro("Dom Quixote");
$livro3 = new Livro("A Caverna");
$livro4 = new Livro("O Pequeno Príncipe");

$biblioteca = new Biblioteca([$livro1, $livro2, $livro3, $livro4]);

echo "Livros na biblioteca:<br>";

for ($biblioteca -> primeiro(); ! $biblioteca -> fim(); $biblioteca -> proximo()) 
{
  echo $biblioteca -> atual() -> getTitulo() . "<br>";
}

$novoLivro = new Livro("1984");
$biblioteca -> adicionarLivro($novoLivro);

echo "<br>Livros na biblioteca após adicionar um novo livro:<br>";

for ($biblioteca -> primeiro(); ! $biblioteca -> fim(); $biblioteca -> proximo()) 
{
  echo $biblioteca -> atual() -> getTitulo() . "<br>";
}
?>
