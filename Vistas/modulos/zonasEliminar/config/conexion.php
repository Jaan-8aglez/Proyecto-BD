<?php
require_once("config/global.php");

$conexion = new mysqli(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);
mysqli_query($conexion,'SET NAMES"'.DB_ENCODE.'"');

if(mysqli_connect_error()){
	printf("Error en la conexion de datos: %s\n",mysqli_connect_error());
	exit();
}

//echo "HOLA MUNDO: ".$conexion->host_info." adios\n";


function ejecutarConsulta($sql){
	global $conexion;
	$query = $conexion->query($sql);
	return $query;
}



?>