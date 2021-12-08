<?php
require '././Modelos/conexion.php';
error_reporting(0);
session_start();

if(isset($_SESSION["usuario"])){
    header("location: inicio.php");
}
if(isset($_POST["submit"])){
    $nombre=$_POST["nombre"];
    $usuario=$_POST["usuario"];
    $contraseña1=$_POST["contraseña"];
    $contraseña2=$_POST["ccontraseña"];

    if($contraseña1==$contraseña2){
        $resultado = $conexion->query("SELECT * FROM guardas WHERE") or die($conexion->error);
    }
}

?>

<div class="login-box">
  <div class="login-logo">
    <a href="assets/index2.html"><b>REGISTRO</b>PANEL</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Regístrese para iniciar su sesión</p>

      <form action="acceso.php" method="POST">
      <div class="input-group mb-3">
          <input type="text" name="nombre" class="form-control" placeholder="Nombre">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>  
        <div class="input-group mb-3">
          <input type="text" name="usuario" class="form-control" placeholder="Usuario">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="contraseña" class="form-control" placeholder="Contraseña">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Recuérdame
              </label>
            </div>
          </div>
        </div>
        <div class="social-auth-links text-center mb-3">
          <button type="submit" class="btn btn-primary btn-block">
          <i class="fas fa-sign-in-alt mr-2"></i>Iniciar Sesión
          </button>
      </div>
      </form>

      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="forgot-password.html">Olvidé mi contraseña</a>
      </p>
      <p class="mb-0">
        <a href="registro.php" class="text-center">Registrar una nueva cuenta</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>