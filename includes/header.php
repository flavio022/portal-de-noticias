<?php 
@$leitor = $_SESSION['leitor'];
@$id_leitor = $_SESSION['idLeitor'];
require_once "configuration.php";?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Destaque S. Paulo</title>
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
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
#menu{
	width: 100%;
	height: 50px;
	float: left;
}
#menu nav{
	width: 1120px;
	height: 50px;
	margin: 0 auto;

}

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
	width: 384px;
	height: auto;
	padding: 12px 7px 0px 7px;
	float:left;
	-webkit-transition:all 0.5s ease-in-out;
}
section#widget-ultimas-noticias ul li:last-child{
	padding-bottom: 12px;

}
section#widget-ultimas-noticias ul li:hover{
	background-color:#297baa;
	color:#fff;}</style>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/easySlider1.7.js"></script>
<script type="text/javascript">
	$(function(){
		$("#slider").easySlider({
			auto:true,
			continuos:true
		});
	});
</script>
</head>
<body>
	<header>
		<div id="topo">

		<div id="logo"> 
		<img src="img/logo.png" alt="Destaque SP logo" width="900px" height="150px"  />
	</div>
		
		<div id="topo-right">
		<p>Olá, Seja bem-vindo <a href="login.php">Faça login</a> ou <a href="cadastrar.php"> Cadastre-se</a>.</p>
		          <form  action="busca.php" method="GET">
              	 <input type="text" name="busca-organica" class="search-box" id="busca-organica" placeholder="Pesquisar" required />
    
          </form>
		
		</div>
		</div>
	</header>
	<div id="menu">
	<div class="container">
 <nav>
 <style>
#menu {
    list-style-type: none;
    margin: 0;
    padding: 0;
   
    background-color: #333;
}

nav li {
    float: left;
}

nav li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

nav li a:hover, .dropdown:hover .dropbtn {
    background-color: red;
}

nav li.dropdown {
    display: inline-block;
}

nav .dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

nav .dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

nav .dropdown-content a:hover {background-color: #f1f1f1}

nav .dropdown:hover .dropdown-content {
    display: block;
}
</style>
</head>
<body>

<ul id="menu">
  <li><a href="index.php">Home</a></li>
  <li class="dropdown">
    <div class="dropdown-content">
      <?php 
  $SQL = mysql_query("SELECT * FROM categoria");
  while($ln = mysql_fetch_assoc($SQL)){
  ?>
  <li><a href="categoria.php?id=<?php echo $ln['id_categoria'];?>"><?php echo $ln['categoria_noticia'];?></a></li>
  <?php }?>
    </div>
  </li>
</ul>

 </nav>
</body>
</html>

