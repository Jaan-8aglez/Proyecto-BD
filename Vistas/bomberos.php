<?php
require '../Modelos/conexion.php';

$resultado = $conexion->query("SELECT * FROM cuerpo_bomberos") or die($conexion->error);

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
          <h1>CUERPO DE BOMBEROS</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="inicio">Inicio</a></li>
            <li class="breadcrumb-item active">Bomberos</li>
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
          <input type="text" class="form-control" name="nombre" id="nombre" placeholder="telefono">
          <span class="input-group-append">
            <button type="button" class="btn btn-info btn-flat"><i class="fas fa-search"></i></button>
          </span>
        </div>

        <button type="button" class="btn btn-primary float-left" data-toggle="modal" data-target="#ModalInsertar">
          <i class="fa fa-plus mr-2"></i>Agregar Bomberos</button>
      </div>
      <div class="card-body overflow-auto">
        <table id="example2" class="table table-bordered table-hover">
          <thead>
            <tr>
              <th class="text-center">Id Cuerpo</th>
              <th class="text-center">Tel emergencia1</th>
              <th class="text-center">Tel emergencia2</th>
              <th class="text-center">Hombres</th>
              <th class="text-center">Camiones</th>
              <th class="text-center">Cisternas</th>
              <th class="text-center">Helicoptero</th>
              <th class="text-center">Acciones</th>
            </tr>
          </thead>
          <tbody>
            <?php
            while ($fila = mysqli_fetch_array($resultado)) {
            ?>
              <tr>

                <td><?php echo $fila['id_cuerpo']; ?></td>
                <td><?php echo $fila['tel_emer1']; ?></td>
                <td><?php echo $fila['tel_emer2']; ?></td>
                <td><?php echo $fila['no_hombres']; ?></td>
                <td><?php echo $fila['no_camiones']; ?></td>
                <td><?php echo $fila['no_cisternas']; ?></td>
                <td><?php echo $fila['no_helicoptero']; ?></td>

                <td class="text-center align-middle">
                  <button class="btn btn-success btnEditar mx-1 my-1" data-id="<?php echo $fila['id_cuerpo']; ?>" data-teluno="<?php echo $fila['tel_emer1']; ?>" data-teldos="<?php echo $fila['tel_emer2']; ?>" data-hombres="<?php echo $fila['no_hombres']; ?>" data-camiones="<?php echo $fila['no_camiones']; ?>" data-cisternas="<?php echo $fila['no_cisternas']; ?>" data-helicoptero="<?php echo $fila['no_helicoptero']; ?>" data-toggle="modal" data-target="#modalEditar">
                    <i class="fas fa-pen-square"></i></button>

                  <button class="btn btn-danger btnEliminar mx-1 my-1" data-id="<?php echo $fila['id_cuerpo']; ?>" data-toggle="modal" data-target="#modalEliminar">
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
      <form action="../Modelos/insertarCuerpo.php" method="POST" enctype="multipart/form-data">
        <div class="modal-header">
          <h5 class="modal-title" id="ModalInsertarLabel">Agregar Cuerpo de Bombero</h5>
          <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="form-group col-6">
              <label>Teléfono emergencia 1</label>
              <input type="text" name="teluno" placeholder="Teléfono 1" id="teluno" class="form-control" required>
            </div>
            <div class="form-group col-6">
              <label>Teléfono emergencia 2</label>
              <input type="text" name="teldos" placeholder="Teléfono 2" id="teldos" class="form-control" required>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-6">
              <label>Número Hombres:</label>
              <input type="number" min="0" name="hombre" placeholder="Numero" id="hombre" class="form-control" required>
            </div>
            <div class="form-group col-6">
              <label>Número Camiones:</label>
              <input type="number" min="0" name="camion" placeholder="Numero" id="camion" class="form-control" required>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-6">
              <label>Número Cisternas:</label>
              <input type="number" min="0" name="cisterna" placeholder="Numero" id="cisterna" class="form-control" required>
            </div>
            <div class="form-group col-6">
              <label>Número Helicoptero:</label>
              <input type="number" min="0" name="helicoptero" placeholder="Numero" id="helicoptero" class="form-control" required>
            </div>
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
        <h5 class="modal-title" id="modalEliminarLabel">Eliminar Cuerpo Bomberos</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ¿Desea eliminar este cuerpo de bomberos?
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
      <form action="../Modelos/editarCuerpo.php" method="POST" enctype="multipart/form-data" > 
      <div class="modal-header">
        <h5 class="modal-title" id="modalEditarLabel">Editar Cuerpo Bomberos</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <input type="hidden" id="idEdit" name="id" class="form-control" >
       <div class="row">
        <div class="form-group col-6">
          <label>Teléfono emergencia 1</label> 
          <input type="text" name="teluno" placeholder="Teléfono 1" id="telunoEdit" class="form-control" required> 
        </div>
        <div class="form-group col-6">
          <label>Teléfono emergencia 2</label> 
          <input type="text" name="teldos" placeholder="Teléfono 2" id="teldosEdit" class="form-control" required> 
        </div>
        </div>
        <div class="row">
          <div class="form-group col-6">
            <label>Número Hombres:</label>
            <input type="number" min="0" name="hombre" placeholder="Numero" id="hombreEdit" class="form-control" required>
          </div>
          <div class="form-group col-6">
            <label>Número Camiones:</label>
            <input type="number" min="0" name="camion" placeholder="Numero" id="camionEdit" class="form-control" required>
          </div>
        </div>
        <div class="row">
          <div class="form-group col-6">
            <label>Número Cisternas:</label>
            <input type="number" min="0" name="cisterna" placeholder="Numero" id="cisternaEdit" class="form-control" required>
          </div>
          <div class="form-group col-6">
            <label>Número Helicoptero:</label>
            <input type="number" min="0" name="helicoptero" placeholder="Numero" id="helicopteroEdit" class="form-control" required>
          </div>
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
        url: '../Modelos/eliminarCuerpo.php',
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
      var teluno = $(this).data('teluno');
      var teldos = $(this).data('teldos');
      var hombres = $(this).data('hombres');
      var camiones = $(this).data('camiones');
      var cisternas = $(this).data('cisternas');
      var helicoptero = $(this).data('helicoptero');
      $("#idEdit").val(idEditar);
      $("#telunoEdit").val(teluno);
      $("#teldosEdit").val(teldos);
      $("#hombreEdit").val(hombres);
      $("#camionEdit").val(camiones);
      $("#cisternaEdit").val(cisternas);
      $("#helicopteroEdit").val(helicoptero);

    });

  });
</script>