<?php
$host = "localhost"; // Está predeterminado en XAMPP como "localhost"
$user = "root";// Está predeterminado en XAMPP como "root"
$password = "";// Está predeterminado en XAMPP sin contraseña
$db = "proyecto";// Nombre de la base de datos a usar
    
// Método para realizar la conexión
$connection=mysqli_connect($host,$user,$password,$db);
$connection -> set_charset("utf8");
  
// Condicional que comprueba la conexión
if($connection->connect_error)
{
    echo "Conexión no establecida";
}

else
{
    // echo "Conexión establecida";
}
