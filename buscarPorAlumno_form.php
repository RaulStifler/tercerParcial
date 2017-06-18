<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8" />
	<title>Mi primera web</title>
	<link rel="stylesheet" href="estilos.css">
</head>
<body>
	<?php require('menubar2.php'); ?>
	<section>		
		<form method="post" action="buscar.php" id="login">
    		<h1>Teclea la clave</h1>
    		<fieldset id="inputs">
        	<input id="clave" name="clave" type="text" placeholder="Clave" autofocus required>   
    		</fieldset>
    		<fieldset id="actions">
        	<input type="submit" id="submit" value="Buscar">
    		</fieldset>
		</form>
	</section>
</body>
</html>