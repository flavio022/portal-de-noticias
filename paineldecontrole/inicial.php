<?php require "includes/header.php"; 
	
	
?>
	<main>
		
		<section id="wrapper">
			
			<section id="content">
			
			<section id="contagem">
				
				<table>
					<tbody>
						<tr>
							<td class="table-marc">Notícias Publicadas</td>
							<td class="table-val"><?php $SQL = mysql_query("SELECT * FROM noticias WHERE status =1"); 
							 echo mysql_num_rows($SQL);
							 ?></td>
							<td>&nbsp;</td>
							<td class="table-marc">Comentários Aprovados</td>
							<td class="table-val">145</td>
						</tr>
						<tr>
							<td class="table-marc">Categorias Ativas</td>
							<td class="table-val"><?php $SQL = mysql_query("SELECT * FROM categoria"); 
							 echo mysql_num_rows($SQL);
							 ?></td>
							<td>&nbsp;</td>
							<td class="table-marc">Comentários Novos</td>
							<td class="table-val">25</td>
						</tr>							
					</tbody>
				</table>
				
			</section>
		
		<section id="nota-rapida">
			
			<h1>Publicar Nota Rápida</h1>
			
			<form action="acoes/publicar-notaR.php" method="POST">
			<table>
				<tbody>
					<tr><td>Titulo da Postagem</td></tr>
					<tr><td><input type="text" name="titulo-postagem" required="required" /></td></tr>
					<tr><td>Descrição da Nota</td></tr>
					<tr><td><textarea name="descricao-nota" required="required" ></textarea></td></tr>
					<tr><td>Tags de Pesquisa</td></tr>
					<tr><td><input type="text" name="tags-pesquisa" required="required" /></td></tr>
					<tr><td><input type="submit" name="publicar-nota" value="Publicar Nota" /></td></tr>
				</tbody>				
			</table>
			</form>
			
		</section> <!-- Nota Rápida -->
		
		<section id="links-ultimas-noticias">
			
			<h1>Últimas Notícias</h1>
			
			<ul>
			<?php $SQL_NI = mysql_query("SELECT * FROM noticias WHERE status =1"); 
					while ($lh = mysql_fetch_array($SQL_NI)) {
					 ?>
					 <li><?php echo $lh["titulo"];?></li>
					 <?php
					 	}
					 ?>
				
			</ul>
			
		</section>
			
			</section> <!-- Content -->
				
		</section> <!-- Wrapper -->
		
	</main>

<?php require "includes/footer.php"; ?>