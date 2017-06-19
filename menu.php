<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8" />
	<title>CECyTEM San Felipe del Progreso</title>
	
	<link rel="stylesheet" href="estilos.css">
</head>
<body>
<?php 
	session_start();
	if (!$_SESSION["usuario_logeado"]) {
		//Codigo que se ejecutara cuando el usuario no esta logeado
		header('Location: index.html'); //Sentencia que nos redirecciona al index para que el usuario se logee
	}else{
		//Codigo que se ejecutara cuando el usuario si esta logeado
		require('menubar.php'); 
	}
?>
</body>
</html>
	
	