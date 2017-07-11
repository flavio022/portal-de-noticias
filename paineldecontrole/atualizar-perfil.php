<?php
session_start();
require_once 'includes/configuration.php';

	$id_adm =(isset($_GET["id_adm"]))?(int)$_GET["id_adm"]:"";
	$em_adm = $_POST["adm-email-up"];
	$us_adm = $_POST["adm-user-up"];
	$sh_adm = $_POST["adm-pass-up"];
	$shcryp = hash('whirlpool', $sh_adm);
	
	if(!empty($sh_adm)){
		mysql_query("UPDATE administradores SET Email ='$em_adm', Usuario='$us_adm', Senha='$shcryp' WHERE id=id_adm");
		$_SESSION["Usuario"] = $us_adm;
		$_SESSION["Senha"] = $shcryp;
		header("Location: alterar-perfil.php");
		
	}else{
		mysql_query("UPDATE administradores SET Email ='$em_adm', Usuario='$us_adm',' WHERE id=id_adm");
		$_SESSION["Usuario"] = $us_adm;
		header("Location: alterar-perfil.php");
		
}

?>