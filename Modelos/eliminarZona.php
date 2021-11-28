<?php
require 'conexion.php';

$conexion->query("DELETE FROM zonas where punto_geo=".$_POST['id']);
echo 'Se elimino correctamente';
?>
