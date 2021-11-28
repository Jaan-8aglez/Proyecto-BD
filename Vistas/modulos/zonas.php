
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>ZONAS </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="inicio">Inicio</a></li>
              <li class="breadcrumb-item active">Zonas</li>
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
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalInsertar">
          <i class="fa fa-plus mr-2"></i>Agregar Zonas</button>
        </div>

        <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th class="text-center">Punto geodésico</th>
                    <th class="text-center" >Nombre</th>
                    <th class="text-center" >Frecuencia</th>
                    <th class="text-center" >Latitud</th>
                    <th class="text-center" >Longitud</th>
                    <th class="text-center" >Editar</th>
                    <th class="text-center" >Eliminar</th>
                  </tr>
                  </thead>
                <tbody>
                <?php

                 while($fila= mysqli_fetch_array($resultado)){
               ?>
            <tr>

             <td><?php echo $fila['punto_geo'];?></td>
             <td><?php echo $fila['nombre'];?></td>
             <td><?php echo $fila['frecuencia'];?></td>
             <td><?php echo $fila['latitud'];?></td>
             <td><?php echo $fila['longitud'];?></td>


             <td><button class="btn btn-success btnEditar" 
             data-id="<?php echo $fila['punto_geo'];?>"
             data-nombre="<?php echo $fila['nombre'];?>"
             data-frecuencia="<?php echo $fila['frecuencia'];?>"
             data-latitud="<?php echo $fila['latitud'];?>"
             data-longitud="<?php echo $fila['longitud'];?>"
             data-toggle="modal" data-target="#modalEditar">
             <i class="fa fa-edit"></i></button></td>

             <td><button class="btn btn-danger btnEliminar" 
             data-id="<?php echo $fila['punto_geo'];?>"
             data-toggle="modal" data-target="#modalEliminar">
             <i class="fa fa-trash"></i></button></td>

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
  <div class="modal-dialog">
    <div class="modal-content">
      <form role="form" action="./insertarZona.php" method="POST" enctype="multipart/form-data" > 
      <div class="modal-header" style="background: #FF5722;" >
        <h5 class="modal-title" id="ModalInsertarLabel" style="color:#fff" >Agregar Zona</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="nombre" >Nombre:</label> 
          <input type="text" name="nombre" placeholder="nombre" id="nombre" class="form-control" required> 
        </div>
        <div class="form-group">
          <label for="descripcion" >Frecuencia:</label> 
          <input type="text" name="frecuencia" placeholder="frecuencia" id="frecuencia" class="form-control" required> 
        </div>
        <div class="row">
        <div class="form-group col-6">
          <label for="precio" >Latitud</label> 
          <input type="number" min="0" name="latitud" placeholder="latitud" id="latitud" class="form-control" required> 
        </div>
        <div class="form-group col-6">
          <label for="inventario" >Longitud</label> 
          <input type="number" min="0" name="longitud" placeholder="longitud" id="longitud" class="form-control" required> 
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