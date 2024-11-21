<?php

require_once 'PaginaReal.php';

class PaginaProxy
{
  private $paginaReal;
  private $usuarioAutenticado;

  public function __construct($usuarioAutenticado)
  {
    $this -> usuarioAutenticado = $usuarioAutenticado;
  }

  public function exibir()
  {
    if ($this -> usuarioAutenticado) 
    {
        if ($this -> paginaReal == null) 
        {
            $this -> paginaReal = new PaginaReal("Conteúdo protegido");
        }
        $this -> paginaReal->exibir();
    } 
    else 
    {
        echo "Acesso negado: usuário não autenticado!<br>";
    }
  }
}
?>
