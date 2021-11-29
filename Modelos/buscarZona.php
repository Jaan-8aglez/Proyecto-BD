<?php
require 'conexion.php';

/* CONSULTA A TABLA JUGADOR */

$tabla="";
$query="SELECT * FROM zona ORDER BY punto_geo";

/*Entra a esta condicion cuando ingresamos el caracter en el input */

if(isset($_POST['nombre'])) /*comprueba si la variable nombre esta definida */
{
	$res=$conexion->real_escape_string($_POST['nombre']);
	$query="SELECT * FROM zona WHERE nombre LIKE '".$res."%' ";/*sintaxis del operador like*/
	
}

//Aqui se crea la tabla que se va a visualizar
$buscarZona=$conexion->query($query);
if ($buscarZona->num_rows > 0)
{
	$tabla.= 
	'<table class="table">
		<tr class="tabla-tr">
			<td>PUNTO_GEO</td>
			<td>NOMBRE</td>
			<td>FRECUENCIA</td>
			<td>LATITUD</td>
			<td>LONGITUD</td>
		</tr>';

	while($filaZona= $buscarZona->fetch_assoc())
	{
		$tabla.=
		//Cambiar estos atributos por los nombres de los campos como estan en su base de datos
		'<tr>
			<td>'.$filaZona['punto_geo'].'</td>
			<td>'.$filaZona['nombre'].'</td>
			<td>'.$filaZona['frecuencia'].'</td>
		    <td>'.$filaZona['latitud'].'</td>
			<td>'.$filaZona['longitud'].'</td>
		 </tr>
		';
	}

	$tabla.='</table>';
} else
	{
		$tabla="<h3>No se encontraron coincidencias en la búsqueda.<h3>";
	}


echo $tabla;
?>

