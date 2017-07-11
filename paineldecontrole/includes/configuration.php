<?php
define("HOST", "mysql.hostinger.com.br");
define("USER", "u941296279_wilso");
define("PASS","aline022");
define("BDNAME","u941296279_porta");

@mysql_connect(HOST,USER,PASS) or die ("Erro no banco de dados, contate o administrador!");
@mysql_select_db(BDNAME) or die ("Banco de dados desconhecido");
 
?>
