<?php
session_start();
require_once '../includes/configuration.php';
	$titulo   = $_POST["titulo-noticia"];
	$conteudo = $_POST["conteudo-noticia"];
	$dataPub  = date("Y-m-d");
	$tagsSear = $_POST["tags-pesquisa"];
	$categoria = $_POST["categoria-noticia"];
	//selecionando autor da noticia
	$autorPub = $_SESSION["Usuario"];
	$autorSen = $_SESSION["Senha"];

	$SQL_AU = mysql_query("SELECT id, Nome From administradores WHERE usuario='$autorPub' and senha='$autorSen' ");
	while($ath = mysql_fetch_assoc($SQL_AU)){
		$autorN = $ath["Nome"];
		$idAutor = $ath['id'];
	}


	$imagem = $_FILES["imagem-noticia"];
	$destino = "../imagens/imgNoticia/".$imagem['name'];
	
	if(isset($_POST["salvar-rascunho"])){
			mysql_query("INSERT INTO noticias(id_noticia,titulo,conteudo,dataPub,autorPub,id_autor, tags,categoria,imagem,status)VALUES(0,'$titulo','$conteudo','$dataPub','$autorN','$idAutor','$tagsSear',$categoria, '".$imagem['name']."',0)");
		
		
	if($imagem['type'] == "image/png"){
		move_uploaded_file($imagem['tmp_name'], $destino);
		}
		header("Location:../gerenciar-noticia.php");
	}
	if(isset($_POST["publicar"])){
		mysql_query("INSERT INTO noticias(id_noticia,titulo,conteudo,dataPub,autorPub,id_autor, tags,categoria,imagem,status)VALUES(0,'$titulo','$conteudo','$dataPub','$autorN','$idAutor','$tagsSear',$categoria, '".$imagem['name']."',1)");
		
		
	if($imagem['type'] == "image/png"){
		move_uploaded_file($imagem['tmp_name'], $destino);
		}
		header("Location:../gerenciar-noticia.php");
	}
	



?>



