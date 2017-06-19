<?php 
session_start();
?>

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
	<?php
	$usuario=$_SESSION['usuario'];
	
	//$clave=$_GET['clave'];
	if(isset($_GET['clave'])){
		$clave=$_GET['clave'];
	}elseif (isset($_POST['clave'])) {
		$clave=$_POST['clave'];
	}
	$conexion=mysql_connect("localhost","root","");
	 
		if($conexion){
		    mysql_select_db("cecytemsfp",$conexion);

		    $consulta="select * from alumnos where n_control='$clave';";		    
		    $ejecuta_consulta=mysql_query($consulta,$conexion);
		    $num_rows=mysql_num_rows($ejecuta_consulta);

		    if($num_rows != 0)
		    {
		    	echo "<table>";
				while($fila=mysql_fetch_array($ejecuta_consulta,MYSQL_ASSOC))
				{
				   echo("<tr><td id=label>Numero de Control</td><td>".$fila["n_control"]."</td></tr>");			   
				   echo("<tr><td id=label>Apellido Paterno</td><td>".$fila["ap_paterno"]."</td></tr>");			   
				   echo("<tr><td id=label>Apellido Materno</td><td>".$fila["ap_materno"]."</td></tr>");
				   echo("<tr><td id=label>Nombre(s)</td><td>".$fila["nombre"]."</td></tr>");
				   echo("<tr><td id=label>Fecha de Nacimiento</td><td>".$fila["fec_nac"]."</td></tr>");
				   echo("<tr><td id=label>Edad</td><td>".$fila["edad"]."</td></tr>");
				   echo("<tr><td id=label>Genero</td><td>".$fila["sexo"]."</td><tr>");
				   echo("<tr><td id=label>Estado Civil</td><td>".$fila["estado_civil"]."</td></tr>");
				   echo("<tr><td id=label>Grado de Estudios</td><td>".$fila["grado_estudios"]."</td></tr>");
				   echo("<tr><td id=label>Semetre</td><td>".$fila["semestre"]."</td></tr>");
				   echo("<tr><td id=label>Grupo</td><td>".$fila["grupo"]."</td></tr>");
				   echo("<tr><td id=label>Estatus</td><td>".$fila["estatus"]."</td></tr>");
				   echo("<tr><td id=label>Entidad de Nacimiento</td><td>".$fila["entidad_nac"]."</td></tr>");
				   echo("<tr><td id=label>CURP</td><td>".$fila["curp"]."</td></tr>");
				   echo("<tr><td id=label>Calle</td><td>".$fila["calle"]."</td></tr>");
				   echo("<tr><td id=label>No exterior</td><td>".$fila["num_ext"]."</td></tr>");
				   echo("<tr><td id=label>No interior</td><td>".$fila["num_int"]."</td></tr>");
				   echo("<tr><td id=label>Entre calle</td><td>".$fila["entre_calle"]."</td></tr>");
				   echo("<tr><td id=label>y calle</td><td>".$fila["y_calle"]."</td></tr>");
				   echo("<tr><td id=label>Otra referencia</td><td>".$fila["otra_referencia"]."</td></tr>");
				   echo("<tr><td id=label>Colonia</td><td>".$fila["colonia"]."</td></tr>");
				   echo("<tr><td id=label>Municipio</td><td>".$fila["municipio"]."</td></tr>");
				   echo("<tr><td  id=label>Entidad</td><td>".$fila["entidad"]."</td></tr>");
				   echo("<tr><td id=label>Codigo Postal</td><td>".$fila["cp"]."</td></tr>");
				   echo("<tr><td id=label>Telefono Fijo</td><td>".$fila["tel_fijo"]."</td></tr>");
				   echo("<tr><td id=label>Telefono Celular</td><td>".$fila["tel_cel"]."</td></tr>");
				   echo("<tr><td id=label>Correo electronico</td><td>".$fila["mail"]."</td></tr>");
				   echo("<tr><td id=label>Tipo de beca</td><td>".$fila["tipo_beca"]."</td></tr>");
				   echo("<tr><td id=label>Tutor</td><td>".$fila["tutor"]."</td></tr>");
				}
				echo "</table>";
	 		}
	 		else
	 		{
	 		echo"<script type='text/javascript'>alert('No hay resultados');
	 				window.location='buscarPorAlumno_form.php';</script>";		
	 		}
	    }	
	    else
		{
		 echo("no se ha podido establecer la conexion");
		}
	?>
	</section>	
	
</body>
</html>