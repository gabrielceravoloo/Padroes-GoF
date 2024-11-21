<?php

require_once 'AdaptadorJsonParaXml.php';

$json = '{"nome": "Gabriel", 
          "idade": 20, 
          "cargo": "estudante", 
          "contatos": {"email": "gabriel@gmail.com", "telefone": "(00) 00000-0000"}}';

$conversorJson = new ConversorJson();
$adaptador = new AdaptadorJsonParaXml($conversorJson);

$xml = $adaptador -> converter($json);

echo $xml;
?>
