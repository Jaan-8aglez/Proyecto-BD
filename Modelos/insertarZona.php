<?php
include "conexion.php";

if(isset($_POST['nombre']) && isset($_POST['frecuencia']) && isset($_POST['latitud'])
&& isset($_POST['longitud'])){

    $conexion->query("insert into incendios (nombre,frecuencia,latitud,longitud)
        values (
            '".$_POST['nombre']."',
            '".$_POST['frecuencia']."',
            '".$_POST['latitud']."',
            '".$_POST['longitud']."'
        )
    ")or die($conexion->error);
    header("Location: zonas.php?success");

      


}else{
    header("Location: zonas.php?error=Favor de llenar todos los campos");
}

?>