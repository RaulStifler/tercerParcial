<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8" />
	<title>Mi primera web</title>
	<link rel="stylesheet" href="normalize.css">
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
			 
	<section>
		 <form method="post" action="registrar_nuevo.php" id="login">
    		<h1 id="label-registrar">Registrar Alumno</h1>
    		<fieldset id="inputs">
        	<input id="no_control" name="no_control" type="text" placeholder="numero de control" autofocus required>
        	<input id="ap_paterno" name="ap_paterno" type="text" placeholder="apellido paterno" required>
        	<input id="ap_materno" name="ap_materno" type="text" placeholder="apellido materno" required>
        	<input id="nombre" name="nombre" type="text" placeholder="nombre del alumno" required>
        	<input type="date" name="fechaNacimiento" required>
        	<select name="edad">
			   <option value="1">14</option> 
			   <option value="2">15</option> 
			   <option value="3">16</option>
			   <option value="4">17</option> 
			   <option value="5">18</option> 
			   <option value="6">19</option> 
			   <option value="7">20</option> 
			</select><br/>
			<input type="radio" name="sexo" value="hombre">Hombre
  			<input type="radio" name="sexo" value="mujer">Mujer
  			<select name="estado_civil">
			   <option value="1">Soltero</option> 
			   <option value="2">Casado</option> 
			   <option value="3">Divorciado</option>
			   <option value="4">Union Libre</option> 			   
			</select><br/>
			<select name="nivel_educativo">
			   <option value="1">Media Superior</option>
			</select><br/>
			<select name="grado">
			   <option value="1">1</option> 
			   <option value="2">2</option> 
			   <option value="3">3</option>
			   <option value="4">4</option> 
			   <option value="5">5</option> 
			   <option value="6">6</option> 			  
			</select><br/>
			<select name="grupo">
			   <option value="1">101</option> 
			   <option value="2">102</option> 
			   <option value="3">103</option>
			   <option value="4">104</option> 
			   <option value="5">105</option> 			   
			</select><br/>
			<select name="estatus">
			   <option value="1">Regular</option> 
			   <option value="2">Irregular</option> 
			   <option value="3">Baja</option>			   
			</select><br/>
			</fieldset>
			<fieldset id="personales">
			<input id="entidad_nacimiento" name="entidad_nacimiento" type="text" placeholder="entidad_nacimiento"  required>
			<input id="clave_curp" name="clave_curp" type="text" placeholder="clave curp"  required>
			<input id="calle" name="calle" type="text" placeholder="calle"  required>
			<input id="no_exterior" name="no_exterior" type="text" placeholder="numero exterior"  required>
			<input id="no_interior" name="no_interior" type="text" placeholder="numero interior"  required>
			<input id="entre_calle" name="entre_calle" type="text" placeholder="entre calle"  required>
			<input id="y_calle" name="y_calle" type="text" placeholder="y calle"  required>
			<input id="otra_referencia" name="otra_referencia" type="text" placeholder="otra referencia"  required>
			<input id="colonia" name="colonia" type="text" placeholder="colonia"  required>
			<input id="localidad" name="localidad" type="text" placeholder="localidad"  required>
			<input id="municipio" name="municipio" type="text" placeholder="municipio"  required>
			<input id="entidad" name="entidad" type="text" placeholder="municipio"  value="México" required>
			<input id="cp" name="cp" type="text" placeholder="codigo postal" required>
			<input id="tel_fijo" name="tel_fijo" type="text" placeholder="telefono fijo" required>
			<input id="tel_celular" name="tel_celular" type="text" placeholder="telefono celular" required>
			<input id="mail" name="mail" type="text" placeholder="correo electronico" required>
			<select name="beca">
			   <option value="1">Prospera</option> 
			   <option value="2">Probems</option> 
			   <option value="3">Indigenas</option>
			   <option value="4">Permanencia</option>
			   <option value="5">Policia Federal</option>
			   <option value="6">Policia Militar</option>
			   <option value="7">Escolaridad</option>
			   <option value="8">Yo no abandono</option>
			   <option value="9">Pro Mazahua</option>
			   <option value="10">Prospera y escolaridad</option>
			</select><br/>
			<input id="tutor" name="tutor" type="text" placeholder="id del tutor" required>
    		</fieldset>
    		<fieldset id="actions">
        	<input type="submit" id="submit" value="Registrar nuevo">
    		</fieldset>
		</form>
	</section>	
	
	
</body>
</html>