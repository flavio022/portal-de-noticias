<?php require_once 'includes/header.php';?>

<main>
	<section id="content">
	<section id="conteudo">
	<?php 
		$id_rn = $_GET['id'];
		$SQL_RN = mysql_query("SELECT * FROM noticias INNER JOIN categoria ON (noticias.categoria = categoria.id_categoria) WHERE id_noticia ='$id_rn'");
	
		while($rn = mysql_fetch_array($SQL_RN)){
			$data = explode("-",$rn["dataPub"]);
			$dataEX = $data[2]."/".$data[1]."/".$data[0];
		

				?>
		<section id="info-noticias"></section>
		<h2><?php echo $rn['titulo']; ?></h2>
		<p>Data publicação: <?php echo $dataEX; ?> Autor: <?php echo $rn["autorPub"]; ?> Categoria: <?php echo $rn['categoria_noticia'];?></p>
		<section id="banner-noticia"><img  src="paineldecontrole/imagens/imgNoticia/<?php echo $rn["imagem"];?>" alt="<?php echo $rn["titulo"];?>/></section>
		<section id="conteudo-noticia"/><?php echo $rn["conteudo"];?></section>
		<section id="tags"><strong>Tags:</strong><?php echo $rn["tags"];?></section>
			<?php if(isset($leitor)){
				?>
		<section id="comentarios">
		<form action="acoes/comentar.php" method="POST">
		<table border="0" cellspacing ="0" cellspacing="0">
		<tr>
				<td>Deixe seu comentario</td>
		</tr>
		<tr>
				<td>Nome</td>
		</tr>
		<tr>
				<td><input type="text" required name="nome_comentario" maxlength="85" /></td>
		</tr>
		<tr>
				<td>Email</td>
		</tr>
		<tr>
				<td><input type="email" required name="email_comentario" maxlength="120"/></td>
		</tr>


<?php } else{  ?>
	<?php }?>
	<section id="comentraios">Deixei seu comentario, <a href="login.php" >faça login para comentar</a></section>
<?php }?>
	</section>
		<section id="sidebar"><?php require_once 'includes/sidebar.php'; ?></section>


</section>
<style type="text/css">section#tags{
	width: 670px;
	height: auto;
	float: left;
	background-color: #E2E2E2;
	color: #121212;
	padding: 10px;
	margin-top: 10px;
	text-align: left;
	border: 2px dashed #BBBBBB;
}
#info-noticias{
	padding-top: 90px;
}
</style>
</main>

	<section id="sidebar">
				<?php require_once 'includes/sidebar.php';
				?>
			</section>