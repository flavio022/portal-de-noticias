<?php require_once 'includes/header.php';?>
<main>
<style type="text/css">
	<style>
section#categoria-news , section#categoria-news-error{
	width: 1050px;
	height: auto;
	float:right;
	padding-bottom: 10px;
	padding-top: 90px;
}


section#categoria-news h1, section#categoria-news-error h1{

	width: 100%;
	height: auto;
	text-align: left;
	font-size: 20px;
	font-family: Tahoma;
	padding: 10px 0px;
	border-bottom: 1px solid #BCBCBC;
	margin-bottom: 10px;
	float:right;
	padding-top: 90px;
}
section#categoria-news h1 a{
	color:#121212;
	text-decoration: none;


}
section#imagem-noticia{
	width: 160px;
	height: 160px;
	float: left;
	border: 5px solid #fff;
	box-shadow: 0px 0px 2px 1px #999999;
	margin-right: 20px;
	margin-bottom: 3px;
	margin-top: 8px;
	overflow: hidden;
}
section#imagem-noticia img{
	width: 160px;
	height: 100%;
	float: left;
}
section#categoria-news p{
	text-align: justify;
	font-size: 14px;
	font-family: Tahoma;
	color: #121212;
	float: left;
	padding-top: 90px;

}
section#categoria-news p a{
	color: #1C4788;
	text-decoration: none;
	padding-top: 90px;
}
a{
	float: left;
}
</style>
</style>
		<section id="content">
				<section id="conteudo">
				
				<?php $id_cat = $_GET["id"];
				$SQL_NC = mysql_query("SELECT id_noticia,titulo, conteudo,imagem FROM noticias WHERE categoria=$id_cat");
				if(mysql_num_rows($SQL_NC)!=0){
				while ($nc = mysql_fetch_array($SQL_NC)) {
					$id_news = $nc["id_noticia"];
					$titulo_news = $nc["titulo"];
					$conteudo_news = $nc["conteudo"];
					$imagem_news = $nc["imagem"];

				?>
					<section id="categoria-news">
					<h1><a href="noticia.php?id=<?php echo $id_news; ?>"><?php echo $titulo_news; ?></a></h1>
				<section id="imagem-noticia"><img src="paineldecontrole/imagens/imgNoticia/<?php echo $imagem_news;?>" alt=""></section>
				<p><?php echo substr($conteudo_news, 0,500); ?><a href="noticia.php?id=<?php echo $id_news; ?>">...Continue Lendo</a></p>
					</section>
					<?php } } else{?>
						<section id="categoria-news-error">
							<h1>Não há noticias para essa categoria!</h1>
							</section>
						<?php } ?>

				</section> <!---Conteudo -->
						<section id="sidebar"><?php require_once 'includes/sidebar.php';?></section>
		</section> <!-- Content -->
</main>