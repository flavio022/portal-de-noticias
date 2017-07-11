<?php

session_start();

unset($_SESSION['Usuario']);
unset($_SESSION['Senha']);

header("Location: index.php");



?>