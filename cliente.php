<?php

require_once('ws\nusoap.php');
$cliente = new soapclient('http://localhost:8080/prototype/server.php');
$result = $cliente->call('hello',array('Mauricio Teste'));
print_r($result);
?>