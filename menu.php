<link rel="stylesheet" href="css/menu.css">
<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="index.php">
      <img src="images/datallizerwhite.png" alt="">
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
          <a class="nav-item nav-link" href="index.php#servicios">Servicios</a>
          <a class="nav-item nav-link" href="index.php#proyectos">Proyectos</a>
          <a class="nav-item nav-link" href="index.php#contacto">Contácto</a>
          <a class="nav-item nav-link" href="noticias.php">Noticias</a>
          <a class="nav-item nav-link" href="index.php#bolsadetrabajo">Bolsa de trabajo</a>
        </div>

        <!-- Action -->
        <div class="d-flex align-items-lg-center mt-3 mt-lg-0 loginbtn btnoffc">
          <!-- Button trigger modal -->
          <a href="login.php" class="btnoffc btn btn-sm btn-outline-light">
            Iniciar sesión
          </a>
        </div>
      </div>
    </div>
  </div>
</nav>

<script src="js/menu.js"></script>