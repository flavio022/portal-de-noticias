<section id="publicidade-sidebar"></section>
<section id="widget-ultimas-noticias">
	<h1>Útimas Noticias do Portal</h1>
	<ul>
	<?php 
		$SQL_UN = mysql_query("SELECT id_noticia, titulo FROM noticias ORDER BY id_noticia DESC LIMIT 5");
		while($un = mysql_fetch_array($SQL_UN)){
	?>
	<li><a href="noticias.php?id='<?php echo$un['id_noticia'];?>"><?php echo $un['titulo'];?></a></li>
	<?php
}
	?>
		</ul>
		<style type="text/css">
			section#widget-ultimas-noticias{
	width: 400px;
	height: auto;
	float: right;
	font-family: tahoma;
	font-size: 14px;
	text-align: right;

}
section#widget-ultimas-noticias h1{
	font-size: 16px;
	background-color: #297baa;
	color:#fff;
	padding: 7px 12px 7px 12px;
	width: 376px;
	height: auto;
	float: right;
	border-radius: 4px;
	position: relative;
	z-index: 2;
}
section#widget-ultimas-noticias ul{
	list-style: none;
	margin: 0;
	padding: 0;
	height: auto;
	float: left;
	margin-top: 5px;
	border: 1px solid #ddd;

	
}
section#widget-ultimas-noticias ul li{
	color:#3582af;
	
	height: auto;
	
	float:left;
	-webkit-transition:all 0.5s ease-in-out;
}
section#widget-ultimas-noticias ul li:last-child{
	padding-bottom: 12px;

}
section#widget-ultimas-noticias ul li:hover{
	background-color:#297baa;
	color:#fff;}</style>


		</style>
</section>
