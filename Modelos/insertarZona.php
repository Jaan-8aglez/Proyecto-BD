<?php
require 'conexion.php';

if(isset($_POST['nombre']) && isset($_POST['frecuencia']) && isset($_POST['latitud'])&& isset($_POST['longitud'])){

    $conexion->query("INSERT INTO zonas (nombre,frecuencia,latitud,longitud)
        values (
            '".$_POST['nombre']."',
            '".$_POST['frecuencia']."',
            '".$_POST['latitud']."',
            '".$_POST['longitud']."'
        )
    ")or die($conexion->error);
    header("Location: ./Vistas/modulos/zonas.php?success");

}else{
    header("Location: ./Vistas/modulos/zonas.php?error=Favor de llenar todos los campos");
}

?>