<?php
require_once "includes/configuration.php";
$usuario = $_SESSION['Usuario'];
$senha = $_SESSION['Senha'];


if(!(isset($usuario) && isset($senha))){
	$url = explode("/", $_SERVER["REQUEST_URI"]);
	
	header("Location: index.php?$url[3]");
}else if(isset($usuario) && isset($senha)){
	$sql = mysql_query("SELECT Usuario, Senha FROM administradores WHERE Usuario='$usuario' AND Senha='$senha'	");
	if(mysql_num_rows($sql) == 0){
		echo "<script>alert(\'Area Restrita!!!!\');</script>";
		header("Location: ../../index.php");
	}
	
}



?>