<?php

require_once 'ArquivoXML.php';
require_once 'Adapter.php';

// =============================================================================

$ArquivoXML = new ArquivoXML('./Arquivos/exemplo.xml');

$adapter = new Adapter($ArquivoXML->ArquivoXML);
$json = $adapter->tradutorJSON();
echo $json;

?>
