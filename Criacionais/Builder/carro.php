<?php

class Carro 
{
    // Propriedades
    private $assentos;
    private $motor;
    private $computadorBordo;
    private $gps;
    
    // Construtor
    public function __construct()
    {}
    
    // GETTERS
    public function getAssentos() 
    {
        return $this->assentos;
    }
    
    public function getMotor() 
    {
        return $this->motor;
    }
    
    public function getComputadorBordo() 
    {
        return $this->computadorBordo;
    }

    public function getGps()
    {
        return $this->gps;
    }

    // SETTERS
    public function setAssentos($assentos)
    {
        $this->assentos = $assentos;
    }

    public function setMotor($motor)
    {
        $this->motor = $motor;
    }

    public function setComputadorBordo($computadorBordo)
    {
        $this->computadorBordo = $computadorBordo;
    }

    public function setGps($gps)
    {
        $this->gps = $gps;
    }
}
?>
