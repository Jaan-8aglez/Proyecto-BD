  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-orange navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item d-none d-sm-inline-block white">
            <a href="login.php" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
                LOGIN
            </a>
      </li>
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Buscar" aria-label="Buscar">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../assets/dist/img/mini-ema.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Emmanuel Varela
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Ya termino mi guardia...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i>Hace 2 hrs</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../assets/dist/img/mini-fer.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Fernando Maldonado
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Ocurrió un incendio en la zona #11</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i>Hace 20 min</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../assets/dist/img/mini-jan.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                Janet Ochoa Gonzalez
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Los bomberos se dirigen a la zona</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i>Hace 5 min</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">Ver todos los mensajes</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notificaciones</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 nuevos mensajes
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 solicitudes
            <span class="float-right text-muted text-sm">12 hrs</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 nuevos reportes
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">Ver todas las notificaciones</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->
   <!-- Main Sidebar Container -->
   <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="../assets/dist/img/icono-fire.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3">
      <span class="brand-text font-weight-light">Gestión de Incendios</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../assets/dist/img/bombero.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Bomberos</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="inicio.php" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Inicio
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="zonas.php" class="nav-link">
              <i class="nav-icon fas fa-hotel"></i>
              <p>
                Zonas
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="bomberos.php" class="nav-link">
              <i class="nav-icon fas fa-fire-extinguisher"></i>
              <p>
                Cuerpo de Bomberos
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="puestoControl.php" class="nav-link">
              <i class="nav-icon fas fa-clipboard-check"></i>
              <p>
                Puestos de Control
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="frecuencias.php" class="nav-link">
              <i class="nav-icon fas fa-wave-square"></i>
              <p>
                Frecuencias
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="guardas.php" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Guardas
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="protege.php" class="nav-link">
              <i class="nav-icon fas nav-icon fas fa-shield-alt"></i>
              <p>
                Protege
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="cerrarSesion.php" class="nav-link">
              <i class="nav-icon fa fa-times"></i>
              <p>
                Cerrar Sesión
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>