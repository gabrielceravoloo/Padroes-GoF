<?php

require_once 'Observer.php';

class Subject
{
  private $observers = [];

  public function registrarObserver(Observer $observer)
  {
    $this -> observers[] = $observer;
  }

  public function cancelarRegistroObserver(Observer $observer)
  {
    $this -> observers = array_filter($this -> observers,function ($obs) use ($observer) {return $obs !== $observer;});
  }

  public function notificarObservers()
  {
    foreach ($this -> observers as $observer) 
    {
      $observer -> notificar();
    }
  }

  // ===========================================================================
  
  public function getObservers()
  {
    return $this -> observers;
  }

  public function setObservers(array $observers)
  {
    $this -> observers = $observers;
  }
}
?>
