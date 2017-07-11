


<style type="text/css">
*{
	margin:0px;
	padding:0px;
}
body{
	background-color: #FFF;
}
/*Configuração do topo */
header{
	width: 100%;
	height: 144px;
	float: left;
	

}
	#topo{
	width: 1219px;
	height: 144px;
	margin:0 auto;
}
#logo{
	width:228px;
	height: 53px;
	float: left;
	margin-top: 13px;

}
#topo-right{
	width:400px;
	height: 144px;
	float:right;
}
#topo-right p{
	width: 455px;
	margin-top: 25px;
	margin-bottom: 20px;
	font-family: tahoma;
	font-size: 14px;
	text-align: right;
}
#topo-right #busca-organica{
	width: :20px;
	height: 25px;
	border: none;
	background: #fff;
	float: right;
	box-shadow: inset 0px 0px 2px 1px #000;
	font-family: Tahoma;
	font-size: 16px;
	color: #9e9e9e;
}
/* Configurações do menu */

/* Configuração do Conteudo */
main{
	width: 100%;
	height: auto;
	float: left;
	position: relative;
	z-index: 1;
	margin-bottom: 30px;
}
section#content{
	width: 1120px;
	height: 400px;
	margin:0 auto;
}
section#conteudo{
	width: 700px;
	height: auto;
	float: left;
}

section.banner{
	width: 690px;
	height: 270px;
	float: left;
	margin-top: 20px;
}
section.banner ul li a img{
	max-width: 690px;
	max-height: 270px;
	min-width: 690px;
	max-height:270px;
}
section#artigos{
	width: 700px;
	height: auto;
	float: left;
	margin-top: 20px;
}
section#artigos article{
	width: 218px;
	height: 250px;
	float: left;
	font-family: tahoma;
	color:#297baa;
	margin-left: 12px;
	margin-bottom: 15px;
}
section#artigos article h1{
	width:218px;
	height:auto;
	float:left;
	font-size:16px;
	text-align: left;
	padding: 0;
}

section#artigos article img{
	width:210px;
	height:160px;
	float:left;
	margin-top:5px;
	border:4px solid #297baa;
}
section#artigos article h2{
	width:218px;
	height:55px;
	float:left;
	font-size:14px;
	text-align: center;
	padding: 0;
}

section#publicidade-conteudo{
	width: 700px;
	height: 100px;
	float: left;
	background-color: #ccc;
}
/*Configuração da sidebar */
section#sidebar{
	width: 400px;
	height: auto;
	margin-top: 20px;
	float: right;
	
}




<?php
require_once "includes/header.php";

?>
<main>
<style type="text/css">
	#conteudo{
		position: absolute;
		top:50px;
			}
</style>
<section id="content">
	<section id="conteudo">
	<style type="text/css">
		.slide{
			padding-top: 200px;
		}
	</style>
	<section id="slider" class="banner">
	<ul>
	<?php
	$SQL_B = mysql_query("SELECT id_noticia, imagem FROM noticias ORDER BY id_noticia DESC LIMIT 5");
	while($bn = mysql_fetch_array($SQL_B)){
	?>
		<li><a href="noticia.php?id=<?php echo $bn['id_noticia']; ?>"><img src="paineldecontrole/imagens/imgNoticia/<?php echo $bn['imagem'];?>"alt="Postagem 1"/></a></li>
		<?php } ?>
		</ul>
		
			</section> <!--Banner-->
			<section id="artigos"> 
			<?php 

			$SQL_F = mysql_query("SELECT * FROM categoria WHERE categoria_noticia='Futebol' ");
			while($ft= mysql_fetch_array($SQL_F)){
				$id_ft = $ft['id_categoria'];
			}
			$SQL_FN = mysql_query("SELECT * FROM noticias WHERE categoria='$id_ft' ORDER BY id_noticia DESC LIMIT 3");
				while($ftn = mysql_fetch_array($SQL_FN)){
					?>
					<article>
						<h1><a href="categoria.php?id=<?php echo $id_ft; ?>">Futebol</a></h1>
						<img src="paineldecontrole/imagens/imgNoticia/<?php echo $ftn['imagem'];?>"alt="<?php echo $ftn['titulo'];?>"/>
						<h2><a href="noticia.php?id=<?php echo $ftn['id_noticia'];?>"><?php echo $ftn['titulo'];?></a></h2>
					</article>
					<?php }?>






					<?php 

			$SQL_E = mysql_query("SELECT * FROM categoria WHERE categoria_noticia='Ecônomia' ");
			while($ec= mysql_fetch_array($SQL_E)){
				$id_ec = $ec['id_categoria'];
			}
			$SQL_EC = mysql_query("SELECT * FROM noticias WHERE categoria='$id_ec'ORDER BY id_noticia DESC LIMIT 3");
				while($ecn = mysql_fetch_array($SQL_EC	)){
					?>
					<article>
						<h1><a href="categoria.php?id=<?php echo $id_ec; ?>">Economia</a></h1>
						<img src="paineldecontrole/imagens/imgNoticia/<?php echo $ecn['imagem'];?>"alt="<?php echo $ecn['titulo'];?>"/>
						<h2><a href="noticia.php?id=<?php echo $ecn['id_noticia'];?>"><?php echo $ecn['titulo'];?></a></h2>
					</article>
					<?php }?>

					<?php 
		$SQL_C = mysql_query("SELECT * FROM categoria WHERE categoria_noticia='Ciência' ");
			while($ci= mysql_fetch_array($SQL_C)){
				$id_c = $ci['id_categoria'];
			}
			$SQL_CI = mysql_query("SELECT * FROM noticias WHERE categoria='$id_c'ORDER BY id_noticia DESC LIMIT 3");
				while($ci = mysql_fetch_array($SQL_CI)){
					?>
					<article>
						<h1><a href="categoria.php?id=<?php echo $id_c; ?>">Ciência</a></h1>
						<img src="paineldecontrole/imagens/imgNoticia/<?php echo $ci['imagem'];?>"alt="<?php echo $ci['titulo'];?>"/>
						<h2><a href="noticia.php?id=<?php echo $ci['id_noticia'];?>"><?php echo $ci['titulo'];?></a></h2>
					</article>
					<?php }?>
			</section> <!--Artigos -->
			<section id="publicidade-conteudo">
				
			</section> <!--Publicidade e conteudo -->

</section> <!-- Conteudo -->
	<section id="sidebar">
				<?php require_once 'includes/sidebar.php';
				?>
			</section>
</section> <!-- Content -->


</main>
