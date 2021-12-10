<?php
require '../Modelos/conexion.php';

$resultado = $conexion->query("SELECT * FROM frecuencias") or die($conexion->error);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Gestión | Incendios</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../assets/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../assets/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../assets/plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- NavBar -->
  <?php include "./estructura/header.php";?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>FRECUENCIAS</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="inicio">Inicio</a></li>
            <li class="breadcrumb-item active">Frecuencias</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <?php
        if (isset($_GET['error'])) {
        ?>
          <div class="alert alert-danger" role="alert">
            <?php echo $_GET['error']; ?>
            <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
          </div>
        <?php  } ?>

        <?php
        if (isset($_GET['success'])) {
        ?>
          <div class="alert alert-success" role="alert">
            Se ha insertado correctamente
            <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
          </div>
        <?php  } ?>

        <div class="input-group input-group-sm col-6 float-right">
          <input type="text" class="form-control" name="nombre" placeholder="frecuencia">
          <span class="input-group-append">
            <button type="button" class="btn btn-info btn-flat"><i class="fas fa-search"></i></button>
          </span>
        </div>

        <button type="button" class="btn btn-primary float-left" data-toggle="modal" data-target="#ModalInsertar">
          <i class="fa fa-plus mr-2"></i>Agregar Frecuencias</button>
      </div>
      <div class="card-body overflow-auto">
        <table id="example2" class="table table-bordered table-hover">
          <thead>
            <tr>
              <th class="text-center">Id Frecuencia</th>
              <th class="text-center">Frecuencia</th>
              <th class="text-center">Acciones</th>
            </tr>
          </thead>
          <tbody>
            <?php

            while ($fila = mysqli_fetch_array($resultado)) {
            ?>
              <tr>

                <td><?php echo $fila['id_frecuencia']; ?></td>
                <td><?php echo $fila['frecuencia_zona']; ?>Mhz</td>

                <td class="text-center align-middle">
                  <button class="btn btn-success btnEditar mx-1 my-1" data-id="<?php echo $fila['id_frecuencia']; ?>" data-frecuencia="<?php echo $fila['frecuencia_zona']; ?>" data-toggle="modal" data-target="#modalEditar">
                    <i class="fas fa-pen-square"></i></button>

                  <button class="btn btn-danger btnEliminar mx-1 my-1" data-id="<?php echo $fila['id_frecuencia']; ?>" data-toggle="modal" data-target="#modalEliminar">
                    <i class="fas fa-trash-alt"></i></button>
                </td>

              </tr>
            <?php } ?>
          </tbody>

        </table>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">

      </div>
      <!-- /.card-footer-->
    </div>
    <!-- /.card -->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Modal Insertar-->
<div class="modal fade" id="ModalInsertar" tabindex="-1" aria-labelledby="ModalInsertarLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form action="../Modelos/insertarFrecuencia.php" method="POST" enctype="multipart/form-data">
        <div class="modal-header">
          <h5 class="modal-title" id="ModalInsertarLabel">Agregar Frecuencias</h5>
          <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label>Frecuencia:</label>
            <input type="text" name="frecuencia" placeholder="frecuencia" id="frecuencia" class="form-control" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Insertar</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal Eliminar -->
<div class="modal fade" id="modalEliminar" tabindex="-1" aria-labelledby="modalEliminarLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalEliminarLabel">Eliminar Frecuencia</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ¿Desea eliminar esta frecuencia?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-danger eliminar" data-dismiss="modal">Eliminar</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal Editar -->
<div class="modal fade" id="modalEditar" tabindex="-1" aria-labelledby="modalEditarLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form action="../Modelos/editarFrecuencia.php" method="POST" enctype="multipart/form-data">
        <div class="modal-header">
          <h5 class="modal-title" id="modalEditarLabel">Editar Frecuencia</h5>
          <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <input type="hidden" id="idEdit" name="id" class="form-control">
          <div class="form-group">
            <label>Frecuencia:</label>
            <input type="text" name="frecuencia" placeholder="frecuencia" id="frecuenciaEdit" class="form-control" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary editar">Actualizar</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php include "./estructura/footer.php";?>
<!-- jQuery -->
<script src="../assets/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../assets/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../assets/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../assets/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../assets/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../assets/plugins/moment/moment.min.js"></script>
<script src="../assets/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../assets/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../assets/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../assets/dist/js/demo.js"></script>
<!-- AdminLTE assets demo (This is only for demo purposes) -->
<script src="../assets/dist/js/pages/assets.js"></script>
<script>
  $(document).ready(function() {
    var idEliminar = -1;
    var idEditar = -1;
    var fila;
    $(".btnEliminar").click(function() {
      idEliminar = $(this).data('id');
      fila = $(this).parent('td').parent('tr');
    });
    $(".eliminar").click(function() {
      $.ajax({
        url: '../Modelos/eliminarFrecuencia.php',
        method: 'POST',
        data: {
          id: idEliminar
        }
      }).done(function(res) {
        alert(res);
        $(fila).fadeOut(1000);
      });
    });
    $(".btnEditar").click(function() {
      idEditar = $(this).data('id');
      var frecuencia = $(this).data('frecuencia');
      $("#idEdit").val(idEditar);
      $("#frecuenciaEdit").val(frecuencia);

    });

  });
</script>