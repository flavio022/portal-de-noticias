<?php
	require_once 'includes/configuration.php';

	$idN =(int)$_GET["idN"];

	mysql_query("UPDATE noticias SET status = 2 WHERE id_noticia=$idN");

	header("Location:gerenciar-noticia.php");

?>