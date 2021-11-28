<?php
function Conectar (){
$conexion = null;
$HOST ='localhost';
$USER ='root';
$PW ='';
$BD ='proyecto';
try{
    $conexion = new PDO('mysql:host='.$HOST.';dbname='.$BD,$USER,$PW);
    //echo "Conexión exitosa";
}
catch(PDOException $e){
    echo '<p>No se puede conectar a la base de datos</p>';
    exit;
}
return $conexion;
}
?>
