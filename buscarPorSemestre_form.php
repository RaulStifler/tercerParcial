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
		<form method="post" action="buscarSemestre.php" id="login">
    		<h1>Semestre ...</h1>
    		<fieldset id="inputs">
    		Semestre: 
        	<select name="semestre" autofocus required>
			   <option value=1>1</option> 
			   <option value=2>2</option> 
			   <option value=3>3</option>
			   <option value=4>4</option> 
			   <option value=5>5</option> 
			   <option value=6>6</option> 			  
			</select><br/>   
    		</fieldset>
    		<fieldset id="actions">
        	<input type="submit" id="submit" value="Buscar">
    		</fieldset>
		</form>
	</section>
</body>
</html>