<?php
require_once '../includes/configuration.php';
$id_nt_ed =$_GET["id_nt_up"];
$titulo  = $_POST["titulo-noticia"];
$conteudo = $_POST["conteudo-noticia"];
$tagSear = $_POST["tags-pesquisa"];
$categoria = $_POST["categoria-noticia"];

$imagem = $_FILES["imagem-noticia"];
$destion = "../imagens/imgnoticia/".$imagem['name'];

if(isset($_POST["salvar-rascunho"])){
	mysql_query("UPDATE noticias SET titulo='$titulo',conteudo='$conteudo', tag='$tagSear', categoria=$categoria, imagem ='".$imagem['name']."',status=0 WHERE id_noticia=$id_nt_ed ");
	if($imagem['type']== "image/jpeg"){
		move_uploaded_file($imagem['tmp_name'], $destino);
	}
	header("Location:../gerenciar-noticia.php");
}
if(isset($_POST["publicar"])){
if($imagem['type'] == "image/jpeg"){
	mysql_query("UPDATE noticias SET titulo='$titulo',conteudo='$conteudo', tag='$tagSear', categoria=$categoria, imagem = '".$imagem['name']."',status=1 WHERE id_noticia=$id_nt_ed ");
	move_uploaded_file($imagem['tmp_name'], $destino);
	

	}
	header("Location:../gerenciar-noticia.php");
}
?>