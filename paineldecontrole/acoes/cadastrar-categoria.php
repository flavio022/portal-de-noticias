<?php
	require_once '../includes/configuration.php';

	$CATEGORIAS_NOMES = explode(',', $_POST["categorias-nomes"]);
	$COUNT_CATEGORIAS = count($CATEGORIAS_NOMES);

	for($i=0; $i<$COUNT_CATEGORIAS; $i++){
		mysql_query("INSERT INTO categoria (id_categoria, categoria_noticia) VALUES(0, '$CATEGORIAS_NOMES[$i]')");
		header("Location:../gerenciar-categoria.php");
	}


?>