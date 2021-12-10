<?php

require '../Modelos/conexion.php';

$tabla="";
$query="SELECT * FROM protege"; 

if(isset($_POST['geodesico'])) 
{
    $resp=$conexion->real_escape_string($_POST['geodesico']);
	$query= "SELECT * FROM protege WHERE punto_geo= $resp AND prioridad= 10 ";
	
}

$buscar_puntoGeo=$conexion->query($query);
if ($buscar_puntoGeo->num_rows > 0)
{
	$tabla.= 
	'<table class="table">
		<tr class="tabla-tr">
			<td>PUNTO GEODESICO</td>
			<td>CUERPO BOMBEROS</td>
			<td>PRORIDAD</td>
		</tr>';

	while($fila= $buscar_puntoGeo->fetch_assoc())
	{
		$tabla.=
	
		'<tr>
			<td>'.$fila['punto_geo'].'</td>
			<td>'.$fila['id_cuerpo'].'</td>
			<td>'.$fila['prioridad'].'</td>
		 </tr>
		';
	}

	$tabla.='</table>';
} else
	{
		$tabla="<br><br><h3>No se encontraron coincidencias en la búsqueda.<h3>";
	}


echo $tabla;
?>


