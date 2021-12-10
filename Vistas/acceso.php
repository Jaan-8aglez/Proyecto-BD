<?php

session_start();

require '../Modelos/conexion.php';

$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];

$validar_login = mysqli_query($conexion, "SELECT * FROM guardas WHERE rol='$usuario' and contraseña='$contraseña' ");

if(mysqli_num_rows($validar_login) > 0){
    $_SESSION['usuario'] = $usuario;

    header('location: inicio.php');
    mysqli_close($conexion);

}else{
    echo '
    <script> 
      alert("Usuario y/o contraseña son incorrectos, verifique sus datos");
      window.location = "login.php";
    </script>
    ';
    mysqli_close($conexion);
}


?>
