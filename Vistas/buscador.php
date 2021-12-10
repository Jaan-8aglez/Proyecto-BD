<?php
require '../Modelos/conexion.php';

$tabla="";
$query="SELECT * FROM zonas ORDER BY punto_geo"; 

/*Entra a esta condicion cuando ingresamos el caracter en el input */

if(isset($_POST['nombre'])) /*comprueba si la variable nombre esta definida */
{
	$res=$conexion->real_escape_string($_POST['nombre']);
	$query= "SELECT * FROM zonas WHERE nombre LIKE '%".$res."%'   "; /* SINTAXIS DE OPERADOR LIKE */
	
}

//Aqui se crea la tabla que se va a visualizar
$buscarJugadores=$conexion->query($query);
if ($buscarJugadores->num_rows > 0)
{
	$tabla.= 
	'<table class="table">
    <tr>
    <th class="text-center">Punto geo</th>
    <th class="text-center">Nombre</th>
    <th class="text-center">Frecuencia</th>
    <th class="text-center">Latitud</th>
    <th class="text-center">Longitud</th>
    <th class="text-center">Acciones</th>
  </tr>';

	while($filaJugadores= $buscarJugadores->fetch_assoc())
	{
		$tabla.=
		//Cambiar estos atributos por los nombres de los campos como estan en su base de datos
		'<tr>
            <td>'.$filaJugadores['punto_geo'].'</td>
			<td>'.$filaJugadores['nombre'].'</td>
			<td>'.$filaJugadores['frecuencia_zona'].'</td>
			<td>'.$filaJugadores['latitud'].'</td>
			<td>'.$filaJugadores['longitud'].'</td>
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