<?php
		require_once('../includes/configuration.php');
		//Variaveis informacoes leitor

		$emailleitor = $_POST["emailleitor"];
		$senhaleitor = $_POST["senhaLeitor"];

		$logar = mysql_query("SELECT id_leitor, nome, email, senha FROM leitores WHERE email='$emailleitor' AND senha=$senhaleitor ") or die("não foi");
		while($ln = mysql_fetch_array($logar)){
			$nomeLeitor = $ln['nome'];
			$id_leitor =  $ln['id_leitor'];
		}
		if($logar != false){
			session_start();
			$_SESSION['leitor'] = $nomeLeitor;
			$_SESSION['id_leitor'] = $id_leitor;
			header('Location: ../index.php');
		}
	
		
	?>