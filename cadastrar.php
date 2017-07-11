<?php require_once 'includes/header.php';?>


<main>
	<section id="content">
	<h1>Cadastre-se...</h1>
	<form action="acoes/loginleitor.php" method="POST">
	Nome:
    <input type="text" name="nomeleitor"/>
    email:
	<input type="text" name="emailleitor"/>
	Senha:
	<input type="text" name="senhaLeitor"/>
	<input type="submit" >
	</form>
</main>
<style type="text/css">
	input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4682B4;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

</style>
