<?php
//inclusão do arquivo de classes NuSOAP
require_once('ws\nusoap.php');
//criação de uma instância do servidor
$server = new soap_server;
//inicializa o suporte a WSDL
$server->configureWSDL('server.hello','urn:server.hello');
$server->wsdl->schemaTargetNamespace='urn:server.hello';
//registra o método a ser oferecido
$server->register('hello',//nome do método
array('name'=> 'xsd:string'),//parâmetro de entrada
array('return'=> 'xsd:string'),//parâmetro de saída
'urn:server.hello',//namespace
'urn:server.hello#hello',//soapaction
'rpc',//style
'encoded',//use
'Retorna o nome'//documentação do serviço
);

	function hello($name){
		return 'Hello '.$name;
	}
//requisição para uso do serviço
$HTTP_RAW_POST_DATA=isset($HTTP_RAW_POST_DATA)?$HTTP_RAW_POST_DATA : '';
$server->service($HTTP_RAW_POST_DATA);
?>


