<?php

require 'conexion.php';

$conexion->query("DELETE FROM guardas WHERE dni_guarda=".$_POST['id']);

echo 'Se elimino correctamente';

?>
