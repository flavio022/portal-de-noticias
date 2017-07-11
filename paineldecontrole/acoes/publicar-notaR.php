<?php
session_start();
require_once '../includes/configuration.php';
	$titulo   = $_POST["titulo-postagem"];
	$conteudo = $_POST["descricao-nota"];
	$dataPub  = date("Y-m-d");
	$tagsSear = $_POST["tags-pesquisa"];
	$categoria = 4;
	$imagem = "default.png";
	//selecionando autor da noticia
	$autorPub = $_SESSION["Usuario"];
	$autorSen = $_SESSION["Senha"];

	$SQL_AU = mysql_query("SELECT id, Nome FROM administradores WHERE usuario='$autorPub' and senha='$autorSen' ");
	while($ath = mysql_fetch_assoc($SQL_AU)){
		$autorN = $ath["Nome"];
		$idAutor = $ath['id'];
	}	

	mysql_query("INSERT INTO noticias(id_noticia,titulo,conteudo,dataPub,autorPub,id_autor, tags,categoria,imagem,status)VALUES(0,'$titulo','$conteudo','$dataPub','$autorN','$idAutor','$tagsSear',$categoria, '$imagem',0)");
		
		
			header("Location:../gerenciar-noticia.php");

	?>