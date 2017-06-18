<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8" />
	<title>CECyTEM San Felipe del Proreso</title>
	<link rel="stylesheet" href="estilos.css">
</head>
<body>
	<?php require('menubar2.php'); ?>
	<section>
	<?php
	$usuario=$_SESSION['usuario'];
	$grupo = $_POST['grupo'];
	$conexion=mysql_connect("127.0.0.1","root","");
	 
		if($conexion){
		    mysql_select_db("cecytemsfp",$conexion);

		    $consulta="select * from alumnos where grupo = $grupo;";
		    $ejecuta_consulta=mysql_query($consulta,$conexion);
		    $num_rows=mysql_num_rows($ejecuta_consulta);

		    if($num_rows != 0)
		    {
		    	echo"<h1>Grupo $grupo </h1>";
		    	echo "<table><tr><th>No Control</th><th>Apellido Paterno</th><th>Apellido Materno</th><th>Nombre</th></tr>";
				while($fila=mysql_fetch_array($ejecuta_consulta,MYSQL_ASSOC))
				{
				   echo("<tr><td><a href=buscar.php?clave=".$fila["n_control"].">".$fila["n_control"]."</a></td>");			   
				   echo("<td>".$fila["ap_paterno"]."</td>");			   
				   echo("<td>".$fila["ap_materno"]."</td>");
				   echo("<td>".$fila["nombre"]."</td></tr>");
				}
				echo "</table>";
	 		}
	 		else
	 		{
	 		echo"<script type='text/javascript'>alert('No hay resultados');
	 				window.location='buscarPorGrupo_form.php';</script>";		
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