<?php 
session_start();
$_SESSION['usuario']=$_POST["username"];
$_SESSION['clave']=$_POST["password"];

$conexion=mysql_connect("localhost","root","");
 
	if($conexion){
	    mysql_select_db("cecytemsfp",$conexion);

		$consulta="select * from usuarios where id_user like '".$_SESSION['usuario']."' and password like '".$_SESSION['clave']."';";
		$ejecuta_consulta=mysql_query($consulta,$conexion);
 		$rows_numero=mysql_num_rows($ejecuta_consulta);
 		
 		if($rows_numero != 0){
 			session_start();
 			$_SESSION['usuario_logeado']=$_SESSION['usuario'];
 			echo"<script type='text/javascript'>window.location='menu.php';</script>";
 		}
 		else
 		{
 			echo"<script type='text/javascript'>alert('Datos no validos');
 				window.location='index.html';</script>";	
 			
 		}
    }	
    else
	{
	 echo("no se ha podido establecer la conexion");
	}
   
?>