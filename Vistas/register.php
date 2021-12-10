<?php
require '../Modelos/conexion.php';

$nombre = $_POST['nombre'];
$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];

$query = "INSERT INTO guardas (nombre,rol,contraseña) 
VALUES ('$nombre','$usuario','$contraseña')";

$verificar_rol= mysqli_query($conexion, "SELECT * FROM guardas WHERE rol='$usuario' ");

if(mysqli_num_rows($verificar_rol) > 0){
    echo '
    <script> 
      alert("Este Usuario y/o Rol ya esta registrado");
      window.location = "login.php";
    </script>
    ';
    mysqli_close($conexion);
}

$resultado = mysqli_query($conexion, $query);

if($resultado){
    echo '
    <script> 
      alert("Usuario registrado exitosamente!");
      window.location = "login.php";
    </script>
    ';
} else {
    echo '
    <script> 
    alert("Error al registrar un usuario!");
      window.location = "login.php";
    </script>
    ';
}
mysqli_close($conexion);

?>