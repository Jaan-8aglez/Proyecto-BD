<?php
	$host="localhost";
	$bd="proyecto";
	$usuario="root";
	$password="";

	$conexion = new mysqli($host,$usuario,$password,$bd);
	$conexion -> set_charset("utf8");
	if($conexion -> connect_error) {
		die("Conexion fallida");
	}