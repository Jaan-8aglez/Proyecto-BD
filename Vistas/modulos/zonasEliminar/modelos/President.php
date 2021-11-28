<?php
//incluir la configuracion de la conexion
require "config/conexion.php";

Class President{
	public function __construct(){

	}

	
	// Lista todos los regsitros
	public function listar(){
		// Consulta para listar
		$sql= "SELECT punto_geo, nombre, frecuencia, latitud, longitud FROM zona";
		return ejecutarConsulta($sql);
  
	}
	// Elimina un registro especifico
	public function eliminar($punto_geo){
		// Consulta para eliminar
		$sql= "DELETE FROM zona WHERE punto_geo='$punto_geo'";
		return ejecutarConsulta($sql);
  
	}
 }



?>