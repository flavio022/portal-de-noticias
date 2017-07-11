<?php 

require_once "includes/header.php";

?>

	<main>
		<section id="wrapper">
			<section id="content">
				<section id="cadastrar-categoria">
				<h1>Cadastrar nova categoria</h1>
				<form action="acoes/cadastrar-categoria.php" method="POST" onsubmit="return validarFormCat();">
				<table>
					<tr>
					<td colspan="2">Informe o nome da categoria abaixo:</td>
					</tr>
					<tr>
						<td><input type="text" name="categorias-nomes" id="categorias-nomes"/></td>
						<td><input type="submit" value="Cadastrar" id="cadastrar-cat"/></td>
					</tr>
					<tr>
						<td colspan="2" class="nota-table">*Separe com virgula (,) o nome das categorias.</td>
					</tr>

				</table>
				</form>
					
				</section>
				<section id="categorias-existentes">
				<h1 class="btm">Categorias cadastradas:</h1>
				<table border="0" cellpadding="0" cellspacing="0">
					<tr>
						<td><b>Nome da Categoria</b></td>
						<td><b>N° de Artigos</b></td>
						<td><b>Excluir</b></td>
					</tr>
						<?php
						$SQL_CT = mysql_query("SELECT * FROM categoria") ;
							while ($CTN = mysql_fetch_array($SQL_CT)) {
								$id_ct = $CTN['id_categoria'];
								$SQL_COUNT_NT = mysql_query("SELECT * FROM noticias WHERE categoria='$id_ct' ");
								$COUNT_NUM = mysql_num_rows($SQL_COUNT_NT);							
							?>
							<tr>
							<td><?php echo $CTN['categoria_noticia']; ?></td>
							<td><?php echo $COUNT_NUM;?></td>
							<td><a href="acoes/excluir-categoria.php?id_ct=<?php echo $id_ct; ?>">Excluir categoria</a></td>
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