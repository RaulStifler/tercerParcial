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
		<form method="post" action="buscarGrupo.php" id="login">
    		<h1>Grupo ...</h1>
    		<fieldset id="inputs">
        	<input id="grupo" name="grupo" type="text" placeholder="Grupo" autofocus required>   
    		</fieldset>
    		<fieldset id="actions">
        	<input type="submit" id="submit" value="Buscar">
    		</fieldset>
		</form>
	</section>
</body>
</html>