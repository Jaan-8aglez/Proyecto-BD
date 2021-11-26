<?php
$host = "localhost"; 
$user = "root";
$password = "";
$db = "incendios";
    
// Método para realizar la conexión
$connection=mysqli_connect($host,$user,$password,$db);
$connection -> set_charset("utf8");
  
// Condicional que comprueba la conexión
if($connection->connect_error)
{
    echo "Conexión no establecida";
} else
{
    // echo "Conexión establecida";
}

