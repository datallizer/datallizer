<link rel="stylesheet" href="css/menu.css">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
  <a class="navbar-brand" href="index.php">
    <img src="images/logo.png" alt="">
  </a>
  
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">MENÚ</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
      <div class="navbar-nav mx-lg-auto">
        <a class="nav-item nav-link" href="index.php">Inicio</a>
        <a class="nav-item nav-link" href="index.php#nosotros">Nosotros</a>
        <a class="nav-item nav-link" href="index.php#galeria">Galería</a>
        <a class="nav-item nav-link" href="index.php#contacto">Contácto</a>
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Servicios <i class="bi bi-three-dots-vertical"></i>
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="paquetes.php">Paquetes</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="reservaciones.php">Reservaciones</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="tours.php">Tours</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="traslados.php">Traslados</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="cruceros.php">Cruceros</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="rentadeautomoviles.php">Renta de automóviles</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="boletosdeavion.php">Vuelos</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="circuitosturisticos.php">Circuitos turísticos</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="excursiones.php">Excursiones</a></li>
          </ul>
        </li>
      </div>
      
      
        <div class="d-flex align-items-lg-center">
            <a type="button" class="btn btn-sm btn-outline-dark" href="login.php">
            Iniciar sesión
            </a>
        </div>
      </div>
    </div>
  </div>
</nav>

<script src="js/menu.js"></script>