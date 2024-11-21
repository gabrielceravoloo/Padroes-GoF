<?php

require_once 'BuilderComputador.php';

$builder = new BuilderComputador();
$computador = $builder -> setProcessador("Intel Core i7") 
                       -> setRam("16GB")
                       -> setArmazenamento("1TB SSD")
                       -> setGpu("NVIDIA GTX 3080")
                       -> build();

echo "Computador com " . $computador->getProcessador() . 
                  ", " . $computador->getRam() . 
                  ", " . $computador->getArmazenamento() . 
                  " e " . $computador->getGpu();
?>
