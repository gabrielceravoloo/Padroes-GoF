<?php

require_once 'Estoque.php';
require_once 'Pagamento.php';
require_once 'Envio.php';

class SistemaPedidoFacade
{
  private $estoque;
  private $pagamento;
  private $envio;

  public function __construct()
  {
    $this -> estoque = new Estoque();
    $this -> pagamento = new Pagamento();
    $this -> envio = new Envio();
  }

  public function processarPedido($produto, $quantidade, $formaPagamento)
  {
    echo "Iniciando o processamento do pedido...<br>";

    if ($this -> estoque -> verificarEstoque($produto, $quantidade)) 
    {
      echo "Estoque disponível. Procedendo com o pagamento...<br>";

      if ($this -> pagamento -> processarPagamento($formaPagamento)) 
      {
        echo "Pagamento aprovado. Preparando o envio...<br>";
        $this -> envio -> enviarPedido($produto, $quantidade);
        echo "Pedido enviado com sucesso!<br>";
      } 
      else 
      {
        echo "Pagamento não aprovado. Pedido cancelado<br>";
      }
    } 
    else 
    {
      echo "Estoque insuficiente. Pedido não pode ser processado<br>";
    }
  }
}
?>
