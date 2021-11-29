<?php
require 'conexion.php';

if(isset($_POST['frecuencia'])){

    $conexion->query("INSERT INTO frecuencias (frecuencia_zona)
        values (
            '".$_POST['frecuencia']."'
          
        )
    ")or die($conexion->error);
    header("Location: ./frecuencias?success");

}else{
    header("Location: ./frecuencias?error=Favor de llenar todos los campos");
}

?>