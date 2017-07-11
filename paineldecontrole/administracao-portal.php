<?php
require_once "includes/header.php";

?>
	<main>
	<style type="text/css">
	section#administracao-portal h1{
	width: 1000px;
	height: auto;
	font-family: Tahoma;
	font-size: 18px;
	color: #121212;
	font-weight: normal;
	margin-top: 10px;
	margin-bottom: 10px;
	margin-left: 7px;
	}
section#administracao-portal-cd h1{
	width: 1000px;
	height: auto;
	font-family: Tahoma;
	font-size: 18px;
	color: #121212;
	font-weight: normal;
	margin-top: 10px;
	margin-bottom: 10px;
	margin-left: 7px;
}
section#administracao-portal table tr td{
	padding: 7px 10px;
	
}
section#administracao-portal table tr td input[type='text']{
	width: 910px;
	height: auto;
	padding:7px 10px 7px 10px;
	border: 1px solid #ccc;
}
section#administracao-portal table tr td input[type='submit']{
	width: 910px;
	height: auto;
	padding:7px 10px 7px 10px;
	border: 1px solid #ccc;
}
section#administracao-portal table tr td input[type='password']{
	width: 200px;
	height: auto;
	padding:7px 10px 7px 10px;
	border: 1px solid #ccc;
}
section#administracao-portal table tr td input[type='submit']{
	width: auto;
	height: auto;
	padding: 5px 7px 5px 7px;
	background-color: #121212;
	color: #fff;
	border: none;
	border-radius: 2px;
	cursor: pointer;
}
section#administracao-portal-cd table tr td{
padding: 7px 66px;
} 

	</style>
		<section id="wrapper">
			<section id="content">
				<section id="administracao-portal">
					<h1>Cadastrar novo administrador</h1>
					<form action="acoes/cadastrar-administrador.php" method="POST" enctype="multipart/form-data">
					<table cellpadding="0" cellspacing="0" border="0">
						<tr>
							<td>Nome:</td>
							<td><input type="text" name="adm-name"/></td>
							</tr>
						<tr>
							<td>Email:</td>
							<td><input type="text" name="adm-email"/></td>
						</tr>
						<tr>
							<td>Usuário:</td>
							<td><input type="text" name="adm-user"/></td>
						</tr>
						<tr>
							<td>Senha:</td>
							<td><input type="password" name="adm-pass" maxlength="" /></td>
						</tr>
						<tr>
							<td colspan="2" align="right"><input type="submit" value="Cadastrar administrador"/></td>
						</tr>
					</table>
					</form>
				</section>
				<section id="administracao-portal-cd">
					<h1>Administradores Cadastrados</h1>
					<table cellpadding="" ="0" cellspacing="0" border="0">
						<tr>
							<td>Nome</td>
							<td>Foto Perfil</td>
							<td>Email</td>
							<td>Usuario</td>
							<td>Artigos Publicados</td>
						</tr>
						<?php
							$SQL = mysql_query("SELECT * FROM Administradores");
								while($lh = mysql_fetch_array($SQL)){

									$idAdm = $lh['id'];
									$SQL_COUNT_NT = mysql_query(
										"SELECT * FROM noticias WHERE id_autor ='$idAdm'");
									$SQL_COUNT = mysql_num_rows($SQL_COUNT_NT);
						?>
						<tr>
							<td><?php echo $lh['Nome']; ?></td>
							<td><img src="imagens/perfil/<?php echo $lh['imgPerfil']; ?>" width="80" height="80"/></td>
							<td><?php echo $lh['Email']; ?></td>
							<td><?php echo $lh['Usuario']; ?></td>
							<td><?php echo $SQL_COUNT; ?></td>

						</tr>
						<?php
					}
						?>
					</table>
				</section>
			</section> <!---Content -->
		</section><!---Wrapper -->
	</main>
<?php require "includes/footer.php";?>