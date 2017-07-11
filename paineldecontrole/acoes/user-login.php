<?php

require_once '../includes/configuration.php';

$userName = $_POST['user-name'];
$userPass = $_POST['user-pass'];
$criptSenha = hash("whirlpool", $userPass);
@$redirURL = $_GET["url"];
$sql = mysql_query ("SELECT Usuario, Senha FROM administradores WHERE Usuario = '$userName' AND Senha ='$criptSenha' ");

if(mysql_num_rows($sql) != 0){
	session_start();
	
	$_SESSION ['Usuario'] = $userName;
	$_SESSION ['Senha'] = $criptSenha;
	
	if(isset($rediURL)){
		header("Location: ../$rediURL");
	}else{
	
	header("Location: ../inicial.php");
	}
}else{

	header("Location: ../index.php");
	
}

?>