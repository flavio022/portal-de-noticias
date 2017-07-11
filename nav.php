     <?php 
  $SQL = mysql_query("SELECT * FROM categoria");
  while($ln = mysql_fetch_assoc($SQL)){
  ?>
  <li><a href="categoria.php?id=<?php echo $ln['id_categoria'];?>"><?php echo $ln['categoria_noticia'];?></a></li>
  <?php }?>
              
 <input type="text" name="busca-organica" class="search-box" id="busca-organica" placeholder="Pesquisar" required />