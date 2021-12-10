<?php

require '../Modelos/conexion.php';

$tabla="";
$query="SELECT * FROM protege ORDER BY punto_geo"; 


if(isset($_POST['id'])) 
{
	$res=$conexion->real_escape_string($_POST['id']);
	$query= "SELECT * FROM protege WHERE punto_geo LIKE '%".$res."%' ";
	
}

//Aqui se crea la tabla que se va a visualizar
$buscarID=$conexion->query($query);
if ($buscarID->num_rows > 0)
{
	$tabla.= 
	'<table class="table">
		<tr class="tabla-tr">
			<td>PUNTO GEODESICO</td>
			<td>CUERPO BOMBEROS</td>
			<td>PRORIDAD</td>
		</tr>';

	while($fila= $buscarID->fetch_assoc())
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
		$tabla="<br><h3>No se encontraron coincidencias en la búsqueda.<h3>";
	}


echo $tabla;
?>
