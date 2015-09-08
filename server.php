<?php
//incluindo do arquivo nusoap
require_once('ws\nusoap.php');
$server = new soap_server;
$server->register('hello');

	function hello($name){
		return 'HELLO'.$name;
	}
	
$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ?
$HTTP_RAW_POST_DATA : '';
$server->service($HTTP_RAW_POST_DATA);


?>