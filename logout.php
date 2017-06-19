<?php 
	session_start();
	unset($_SESSION["usuario_logeado"]);
	if (!$_SESSION["usuario_logeado"]) {
		header('Location: index.html');
	}else{
		header('Location: menu.php');
	}
?>
