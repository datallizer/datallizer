<link rel="stylesheet" href="css/menu.css">
<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="index.php">
      <img src="images/logoWhite.png" alt="Logo">
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
          <a class="nav-item nav-link" href="seguros.php">Seguros</a>
          <a class="nav-item nav-link" href="litigio.php">Litigio</a>
          <a class="nav-item nav-link" href="noticias.php">Noticias</a>
          <a class="nav-item nav-link" href="contacto.php">Contácto</a>
        </div>

        <!-- Action -->
        <div class="d-flex align-items-lg-center mt-3 mt-lg-0 loginbtn btnoffc">
          <a href="login.php" class="btn btn-outline-light">Iniciar sesión</a>
        </div>
      </div>
    </div>
  </div>
</nav>

<script src="js/menu.js"></script>