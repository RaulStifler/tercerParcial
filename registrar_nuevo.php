<?php 
session_start();
$clave=$_POST['clave'];

$conexion=mysql_connect("localhost","root","");
 
	if($conexion){
	    mysql_select_db("cecytemsfp",$conexion);

	    $consulta="select * from alumnos where clave like '".$clave."';";
	    $ejecuta_consulta=mysql_query($consulta,$conexion);
	    $num_rows=mysql_num_rows($ejecuta_consulta);

	    if($num_rows != 0)
	    { 		
 		echo"<script type='text/javascript'>alert('Ya existe un alumno registrado con esa clave');</script>";
 		echo"<script type='text/javascript'>window.location='nuevo.php';</script>";
 		}
 		else
 		{
 			$no_control = $_POST['no_control'];
 			$ap_paterno = $_POST['ap_paterno'];
 			$ap_materno = $_POST['ap_materno'];
 			$nombre = $_POST['nombre'];
 			$fechaNacimiento = $_POST['fechaNacimiento'];
 			$edad = $_POST['edad'];
 			$sexo = $_POST['sexo'];
 			$estado_civil = $_POST['estado_civil'];
 			$nivel_educativo = $_POST['nivel_educativo'];
 			$grado = $_POST['grado'];
 			$grupo = $_POST['grupo'];
 			$estatus = $_POST['estatus'];
 			$entidad_nacimiento = $_POST['entidad_nacimiento'];
 			$clave_curp = $_POST['clave_curp'];
 			$calle = $_POST['calle'];
 			$no_exterior = $_POST['no_exterior'];
 			$no_interior = $_POST['no_interior'];
 			$entre_calle = $_POST['entre_calle'];
 			$y_calle = $_POST['y_calle'];
 			$otra_referencia = $_POST['otra_referencia'];
 			$colonia = $_POST['colonia'];
 			$localidad = $_POST['localidad'];
 			$municipio = $_POST['municipio'];
 			$entidad = $_POST['entidad'];
 			$cp = $_POST['cp'];
 			$tel_fijo = $_POST['tel_fijo'];
 			$tel_celular = $_POST['tel_celular'];
 			$mail = $_POST['mail'];
 			$beca = $_POST['beca'];
 			$tutor = $_POST['tutor'];
 		$consulta="insert into alumnos values()";
		mysql_query($consulta,$conexion);
 		echo"<script type='text/javascript'>alert('Se ha registrado con exito');
 				window.location='nuevo.html';</script>";		
 		}
    }	
    else
	{
	 echo("no se ha podido establecer la conexion");
	}