<?php

require_once 'carro.php';

class BuilderCarro 
{
    private $carro;

    public function __construct() 
    {
        $this->carro = new Carro();
    }

    public function setAssentos($assentos) 
    {
        $this->carro->setAssentos($assentos);
        return $this;
    }

    public function setMotor($motor) 
    {
        $this->carro->setMotor($motor);
        return $this;
    }

    public function setComputadorBordo($computadorBordo) 
    {
        $this->carro->setComputadorBordo($computadorBordo);
        return $this;
    }

    public function setGps($gps) 
    {
        $this->carro->setGps($gps);
        return $this;
    }

    public function build() 
    {
        return $this->carro;
    }
}

?>
