<?php

	$con = mysql_connect ("mysql5.000webhost.com","a6474519_user","m9d8f8cad9.") or die(mysql_error());;
	mysql_select_db("a6474519_bd",$con);
	
	$nome = $_POST['nome'];		
	$cpf  = $_POST['cpf'];
	$end  = $_POST['end'];
	$tel  = $_POST['tel']; 	
		
	/*$nome = mysql_real_escape_string ($_REQUEST['nome']);	
	$cpf  = mysql_real_escape_string ($_REQUEST['cpf']);
	$end  = mysql_real_escape_string ($_REQUEST['end']);
	$tel  = mysql_real_escape_string ($_REQUEST['tel']);*/
	
	$sql = "INSERT INTO tb_prototype(nome,cpf,endereco,telefone) values('$nome','$cpf','$end','$tel')";
	$res = mysql_query($sql);
	
	if($res == true){
		$cadastro =1;
		echo "FOI";	
		
	}else{
		$cadastro=0;
		echo"Não foi";
		
	}
	
	
?>
?>