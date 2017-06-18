<?php 
session_start();
$cantidad=$_POST["cantidad"];
$clave=$_POST["clave_prod"];

$conexion=mysql_connect("127.0.0.1","root","");
 
	if($conexion){
	    mysql_select_db("almacen",$conexion);

	    $consulta="select * from productos where clave = '".$clave."';";
	    $ejecuta_consulta=mysql_query($consulta,$conexion);
	    $num_rows=mysql_num_rows($ejecuta_consulta);

	    if($num_rows != 0)
	    {
		$consulta="update productos set cantidad = cantidad + ".$cantidad." where clave = '".$clave."';";
		$ejecuta_consulta=mysql_query($consulta,$conexion);
 		
 		echo"<script type='text/javascript'>alert('Entrada exitosa');</script>";
 		echo"<script type='text/javascript'>window.location='entradas.html';</script>";
 		}
 		else
 		{
 		echo"<script type='text/javascript'>alert('La clave de producto no existe');
 				window.location='entradas.html';</script>";		
 		}
    }	
    else
	{
	 echo("no se ha podido establecer la conexion");
	}