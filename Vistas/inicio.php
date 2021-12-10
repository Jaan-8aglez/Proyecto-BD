  
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
        <div class="row mb-2 justify-content-end pr-2">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="inicio">Inicio</a></li>
            <li class="breadcrumb-item active">Panel Principal</li>
          </ol>
        </div>
      </div>
    </section>

    <section class="content">
      <!-- Default box -->
      <div class="card">

        <div class="card-body">

          <div class="d-flex justify-content-lg-center">
            <section class="content">
              <div class="container-fluid text-center">
                <img src="../assets/dist/img/banner.png" class="img-fluid">
                <h3>"Todo en orden cuando las emergencias están a la orden del día"</h1>
                  <button type="button" class="btn btn-primary btn-lg mt-5 mx-3 my-5 px-5" data-toggle="modal" data-target="#acercaDe">Acerca de</button>
                  <button type="button" class="btn btn-secondary btn-lg mt-5 mx-3 my-5" data-toggle="modal" data-target="#problematica">Leer problemática</button>
              </div>
              <div class="modal fade" id="acercaDe" tabindex="-1" aria-labelledby="acercaDeLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="acercaDeLabel">Acerca De</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <p>
                        Este sistema va dirigido a aquellos héroes que enfrentan al peligro con valor, pero no al desorden de su información.
                        <br>¿La forma de lograrlo? Con esta simple pero poderosa herramienta que brinda de forma intuitiva y visualmente agradable
                        una manera de administrar los datos sin tener que meterse con los engorrosos procesos informáticos, porque sabemos
                        que sus manos están ocupadas con el fuego y nunca deberían estarlo con códigos.
                      </p>
                      
                      <p>
                        Para comenzar, es necesario registrar a cada bombero con los datos que solicita el formulario, ya que con ello podrán
                        acceder al sistema si proporcionan sus credenciales de forma correcta y cuando finalicen sus labores, puedan cerrar la sesión.
                      </p>
                      <p>
                        Ya estando dentro del sistema, pueden observar que cada vista está presente en el menú de la izquierda, y ahí se pueden
                        encontrar las tablas que muestran los registros pertenecientes a las zonas que resguardan, cuáles son los puestos de control,
                        qué frecuencias utilizan, cuáles son los cuerpos de bomberos y qué miembros son parte de ellos. Así mismo, dentro de todas
                        esas vistas se puede hacer una búsqueda que rápidamente les ponga a su alcance la información que tecleen en el campo de "Buscar".
                        Aunado a ello, se tiene dedicado el botón "+Añadir" para crear nuevos datos de forma organizada, y no obstante se puede editar
                        cualquier registro con los botones que tienen un ícono de un lapiz escribiendo, o incluso eliminar dichos registros haciendo click
                        en el botón con el ícono que asemeja a un bote de basura si así lo desean.
                      </p>
                      <p class="text-center">
                        Hecho con <i class="fas fa-heart"></i> por:
                        <br>Daniela Rocha Romero
                        <br>Emmanuel Varela Calderón
                        <br>Fernando Artemio Maldonado González
                        <br>Janet Ochoa González
                      </p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="modal fade" id="problematica" tabindex="-1" aria-labelledby="problematicaLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="problematicaLabel">Problemática</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <p>La Comunidad de Madrid preocupada por los incendios forestales quiere crear una red informática entre todos los puntos
                        creados para el control de estos incendios de una forma rápida y efectiva. Para ello ha pensado en el diseño de una base
                        de datos relacional que contenga la siguiente información.</p>
                      <p>La Comunidad de Madrid está dividida en zonas de riesgo de incendios que se distinguen por lo que se denomina punto geodésico
                        (cadena de 6 dígitos que identifica cada zona). También se desea almacenar la frecuencia de radio por la que emite cada zona y
                        la latitud y longitud tomadas por el sistema GSM. La latitud y longitud definen unas coordenadas que son únicas para cada zona.</p>
                      <p>Cada zona, dependiendo de su extensión, está compuesta de varios puestos de control. Estos puestos son gestionados por un guarda
                        forestal, el cual es el responsable de que exista una persona 24 horas vigilando el bosque. Cada puesto de control está identificado
                        por un nombre y el punto geodésico de la zona a la que pertenece, pero también se desea conocer otras características, como el
                        responsable del puesto, frecuencia de radio en la que se encuentra (si es distinta de la asignada a la zona).</p>
                      <p>Los guardas forestales están asignados a uno o varios puestos forestales pero únicamente a una zona de riesgo. Eso sí, en un
                        determinado momento sólo podrán estar en un puesto de control. De ellos se requiere el nombre, el DNI, el teléfono, la dirección y
                        su antigüedad en años (el primer año de servicio tendrá una antigüedad igual a cero).</p>
                      <p>Por último, para que el sistema funcione, un conjunto de cuerpos de bomberos se encuentran distribuidos por distintos puntos y acudirán
                        si existe una emergencia a cualquiera de las zonas en las que está dividida la comunidad. El radio de actuación de un determinado cuerpo
                        de bomberos puede cubrir varios puestos de control de distintas zonas por lo que almacenará un atributo de prioridad (1 ... 10) para
                        indicar, de menor a mayor, el orden de actuación de si existen dos incendios simultáneos en la misma zona.</p>
                      <p>De cada uno de los cuerpos de bomberos se requiere un código de cuerpo, dos teléfonos de emergencia y los efectivos de los que dispone,
                        divididos en: número de hombres, número de camiones cisternas y helicópteros. Si existe alguna unidad de bomberos que desaparezca toda la
                        información asociada a los mismos debe desaparecer de la base de datos.</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
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
</body>
</html>