<?php
	require_once '../includes/configuration.php';

	$id_ct = (int)$_GET["id_ct"];

	mysql_query("DELETE FROM categoria WHERE id_categoria = '$id_ct'");
	header("Location:../gerenciar-categoria.php");

?>