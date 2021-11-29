<?php
require 'conexion.php';

if(isset($_POST['frecuencia']) ){
  
   
    $conexion->query("UPDATE frecuencias SET
                                  
                                  frecuencia='".$_POST['frecuencia']."'
            
                                  where id_frecuencia=".$_POST['id']);
                                  header("Location: ./Vistas/modulos/frecuencias.php?success");                     
}
?>