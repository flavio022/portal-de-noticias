<?php
	require_once '../includes/configuration.php';

	$idN =(int)$_GET["idNX"];

	mysql_query("UPDATE noticias SET status = 2 WHERE id_noticia=$idNX");

	header("Location:../gerenciar-noticia.php");

?>


<?php
	require_once '../includes/configuration.php';

	$idNX =(int)$_GET["idNX"];

	mysql_query("DELETE FROM noticias WHERE id_noticia=$idNX");

	header("Location:../gerenciar-noticia.php");

?>