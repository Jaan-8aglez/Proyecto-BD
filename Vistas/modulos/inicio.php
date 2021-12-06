  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>PANEL PRINCIPAL</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item active">Panel Principal</li>
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
          <h2 class="text-center" style="color: #fd7e14" >GESTIÓN DE INCENDIOS</h2>
        </div>
        <div class="card-body">

        <div class="container" >

        <p>La Comunidad de Madrid preocupada por los incendios forestales quiere crear una red informática entre todos los puntos creados para el control de estos incendios de una forma rápida y efectiva. Para ello ha pensado en el diseño de una base de datos relacional que contenga la siguiente información.</p>
        <p>La Comunidad de Madrid está dividida en zonas de riesgo de incendios que se distinguen por lo que se denomina punto geodésico (cadena de 6 dígitos que identifica cada zona). También se desea almacenar la frecuencia de radio por la que emite cada zona y la latitud y longitud tomadas por el sistema GSM. La latitud y longitud definen unas coordenadas que son únicas para cada zona.</p>
        <p>Cada zona, dependiendo de su extensión, está compuesta de varios puestos de control. Estos puestos son gestionados por un guarda forestal, el cual es el responsable de que exista una persona 24 horas vigilando el bosque. Cada puesto de control está identificado por un nombre y el punto geodésico de la zona a la que pertenece, pero también se desea conocer otras características, como el responsable del puesto, frecuencia de radio en la que se encuentra (si es distinta de la asignada a la zona).</p>
        <p>Los guardas forestales están asignados a uno o varios puestos forestales pero únicamente a una zona de riesgo. Eso sí, en un determinado momento sólo podrán estar en un puesto de control. De ellos se requiere el nombre, el DNI, el teléfono, la dirección y su antigüedad en años (el primer año de servicio tendrá una antigüedad igual a cero).</p> 
        <p>Por último, para que el sistema funcione, un conjunto de cuerpos de bomberos se encuentran distribuidos por distintos puntos y acudirán si existe una emergencia a cualquiera de las zonas en las que está dividida la comunidad. El radio de actuación de un determinado cuerpo de bomberos puede cubrir varios puestos de control de distintas zonas por lo que almacenará un atributo de prioridad (1 ... 10) para indicar, de menor a mayor, el orden de actuación de si existen dos incendios simultáneos en la misma zona.</p>
        <p>De cada uno de los cuerpos de bomberos se requiere un código de cuerpo, dos teléfonos de emergencia y los efectivos de los que dispone, divididos en: número de hombres, número de camiones cisternas y helicópteros. Si existe alguna unidad de bomberos que desaparezca toda la información asociada a los mismos debe desaparecer de la base de datos.</p>      
         </div>
          <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>150</h3>

                <p>New Orders</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>53<sup style="font-size: 20px">%</sup></h3>

                <p>Bounce Rate</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>44</h3>

                <p>User Registrations</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>65</h3>

                <p>Unique Visitors</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
       
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->