
<html>
<head><meta charset="UTF-8"></head>
<body>
<?php


require_once('ws\nusoap.php');
//Definicao da localização do arquivo WSDL
$wsdl = 'server2.php?wsdl';
//criação de uma instância do cliente
$client= new soapclient($wsdl, true);
//verifica se ocorreu erro na criação do objeto
$err = $client->getError();
if($err){
	echo"Erro no construtor<pre>".$err."</pre>";
}
//chamada do método SOAP
$result = $client->call('hello',array('Meu TESTE'));
//Verifica se ocorreu falha na chamada do método
if ($client->fault){
	echo"Falha<pre>".print_r($result)."</pre>";
}else{
	//verifica se ocorreu erro	
	$err = $client->getError();	
	if ($err){
		echo "Erro<pre>".$err."</pre>";	
		
		
	}else{
	
echo '<h2>Requisição</h2>';
echo '<pre>'.htmlspecialchars($client->request).'</pre>';
echo '<h2>Resposta</h2>';
echo '<pre>'.htmlspecialchars($client->response).'</pre>';// Exibe mensagens para debug
echo '<pre>'.htmlspecialchars($client->response).'</pre>';
//echo '<h2>Debug</h2>';
//echo '<pre>'.htmlspecialchars($client->debug_str).'</pre>';

		print_r($result);
		
		
	}//end_else
}//end_else




?>
</body>
</html>