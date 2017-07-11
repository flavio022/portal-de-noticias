<?php
require_once "includes/header.php";
require_once 'includes/configuration.php';
?>
<style>
section#alterar-perfil h1{
		width: 1000px;
		height: auto;
		font-family: Tahoma;
		font-size: 18px;
		color:#121212;
		font-weight: normal;
		margin-top: 10px;
		margin-bottom: 10px;
		margin-left: 10px;
	}
section#alterar-perfil table tr td {
padding: 7px 10px;
	}
section#alterar-perfil table tr td input[type='text']{
	width: 700px;
}
section#alterar-perfil table tr td input[type='submit']{
	width: 200px;
	height: auto;
	padding: 7px 10px 7px 10px;
	border: 1px solid #ccc;
	color: #fff;
	background-color: #121212;
	cursor: pointer;
}
section#alterar-perfil table tr td input[type='text']{
width: 910px;
height: auto;
padding: 7px 10px 7px 10px;
border:1px solid #ccc;
cursor: pointer;
}


</style>
	<main>
			<section id="wrapper">

					<section id="content">
						
		<section id="alterar-perfil">
			<h1>Alterar Perfil</h1>
			<?php
				$admin_log = $_SESSION["Usuario"];
				$admin_pass = $_SESSION["Senha"];

				$SQL_P = mysql_query(" SELECT * FROM administradores WHERE Usuario = '$admin_log' AND Senha='$admin_pass'");

				while($ln = mysql_fetch_assoc($SQL_P)) {
						$id_adm = $ln['id'];
						$nm_adm = $ln['Nome'];
						$em_adm = $ln["Email"];
						$us_adm = $ln["Usuario"];
						$im_adm = $ln ["imgPerfil"];
				}
			?>

			<form action="acoes/atualizar-perfil.php?id_adm=<?php echo $id_adm; ?>" method="POST" enctype="multipart/form-data">
			<table cellpadding="0" cellpadding="0" border="0">
				<tr>
				<td>Nome:</td>
				<td><?php echo $nm_adm; ?></td>
				</tr>
				<tr>
				<td>Email:</td>
				<td><input type="text" name="adm-email-up" maxlength="50" value="<?php echo $em_adm;?>"></td>
				</tr>
				<tr>
					<td>Usuario:</td>
					<td><input type="text" name="adm-user-up" value="<?php echo $us_adm; ?>"></td>
				</tr>
				<tr>
				<td>Senha:</td>
				<td><input type="text" name="adm-pass-up"  ></td>
				</tr>
				<tr>
					<td colspan="2" align="right"><input type="submit" value="Atualizar dados"></td>
				</tr>

				</table>
				<table id="imgPerfil">
					<tr>
						<td><img src="imagens/perfil/<?php echo $im_adm; ?>" width"180" height="180"/></td>
					</tr>
					<tr>
						<td><input type="text" id="imagem-noticia-carregar" placeholder="Selecione uma imagem"/> <input type="file" hidden id="imagem-carregada" name="adm-imgPerfil-up"/></td>
					</tr>
				</table>
				</form>
		</section>				


					</section>
				
			</section>

	</main>
	<?php require "includes/footer.php";?>