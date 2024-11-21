<?php

  class Configuracao 
  {
      private static $instancia = null;
      private $configuracoes = [];
  
      // =======================================================================
      
      private function __construct() {}
  
      // =======================================================================
      public static function getInstancia() 
      {
        if (self::$instancia == null) 
        {
            self::$instancia = new Configuracao();
        }
        return self::$instancia;
      }
  
      // =======================================================================
      public function set($chave, $valor) 
      {
        $this->configuracoes[$chave] = $valor;
      }
  
      public function get($chave) 
      {
        return isset($this -> configuracoes[$chave]) ? $this -> configuracoes[$chave] : null;
      }
  }
?>
    