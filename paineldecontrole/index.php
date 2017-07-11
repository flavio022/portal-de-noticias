<?php
session_start();
@$usuario = $_SESSION['Usuario'];
@$senha = $_SESSION['Senha'];
$senha ='123456';

if(isset($usuario) && isset($senha)){
	header("Location: inicial.php");
}




?>


<html lang="pt_br">
	<head>
		<meta charset="utf-8" />
		<title>Painel de Controle - Portal WVD</title>
		<link rel="stylesheet" type="text/css" href="css/default.css" media="screen" />
		<script type="text/javascript" src="jquery-1.9.1.js"></script>
	</head>
	
	<body>
		
	<main id="login">
	<?php
	if(isset($_GET["url"])){
		$url = $_GET["url"];
	
		
	?>
		<form action="acoes/user-login.php?$url=<?php echo $url ?>;" method="POST">
	<?php }else{ ?>
	<form action="acoes/user-login.php" method="POST">
	<?php } ?>
		<table>
			<tbody>
				<tr>
					<td colspan="2"><h1>Painel de Controle</h1></td>
				</tr>
			<tr>
				<td>Usuário</td>
				<td><input type="text" name="user-name" id="user-name" /></td>
			</tr>
			
			<tr>
				<td>Senha</td>
				<td><input type="password" name="user-pass" id="user-pass" /></td>
			</tr>
			
			<tr>
				<td colspan="2"><input type="submit" name="user-login" id="user-login" value="Iniciar Sessão" /></td>
			</tr>
			</tbody>
		</table>
		</form>
			
	</main>
		
	</body>
</html>