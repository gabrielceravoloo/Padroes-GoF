<?php

include_once 'UI.php';

interface AbstractFactory 
{
    public function getUI(): UI;
}

?>
