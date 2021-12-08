<?php
require '././Modelos/conexion.php';

$resultado = $conexion->query("SELECT * FROM protege") or die($conexion->error);

?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1> PROTEGE</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="inicio">Inicio</a></li>
            <li class="breadcrumb-item active">Protege</li>
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
          <input type="text" class="form-control" name="nombre" id="nombre" placeholder="nombre">
          <span class="input-group-append">
            <button type="button" class="btn btn-info btn-flat"><i class="fas fa-search"></i></button>
          </span>
        </div>

        <button type="button" class="btn btn-primary float-left" data-toggle="modal" data-target="#ModalInsertar">
          <i class="fa fa-plus mr-2"></i>Agregar Datos</button>
      </div>
      <div class="card-body overflow-auto" id="datos">
        <table id="example2" class="table table-bordered table-hover">
          <thead>
            <tr>
              <th class="text-center">Punto geo</th>
              <th class="text-center">Id Cuerpo Bomberos</th>
              <th class="text-center">Prioridad</th>
              <th class="text-center">Acciones</th>
            </tr>
          </thead>
          <tbody>
            <?php

            while ($fila = mysqli_fetch_array($resultado)) {
            ?>
              <tr>

                <td><?php echo $fila['punto_geo']; ?></td>
                <td><?php echo $fila['id_cuerpo']; ?></td>
                <td><?php echo $fila['prioridad']; ?></td>

                <td class="text-center align-middle">
                  <button class="btn btn-success btnEditar mx-1 my-1" data-id="<?php echo $fila['punto_geo']; ?>" data-nombre="<?php echo $fila['nombre']; ?>" data-frecuencia="<?php echo $fila['frecuencia_zona']; ?>" data-latitud="<?php echo $fila['latitud']; ?>" data-longitud="<?php echo $fila['longitud']; ?>" data-toggle="modal" data-target="#modalEditar">
                    <i class="fas fa-pen-square"></i></button>

                  <button class="btn btn-danger btnEliminar mx-1 my-1" data-id="<?php echo $fila['punto_geo']; ?>" data-toggle="modal" data-target="#modalEliminar">
                    <i class="fas fa-trash-alt"></i></button>
                </td>

              </tr>
            <?php } ?>
          </tbody>

        </table>
        <?php include '././Modelos/innerjoin.php' ?>
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