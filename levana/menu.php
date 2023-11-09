<link rel="stylesheet" href="css/menu.css">
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <div class="container">
    <a class="navbar-brand" href="index.php">
      <img src="images/logo.png" alt="logo">
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
          <!-- <a class="nav-item nav-link" href="index.php#desarrollo">Desarrollo</a> -->
          <a class="nav-item nav-link" href="index.php">Paseos Levana</a>
          <a class="nav-item nav-link" href="vialevana.php">Vía Levana</a>
          <!-- <a class="nav-item nav-link" href="index.php#galeria">Galería</a> -->
          <a class="nav-item nav-link" href="index.php#contacto">Contácto</a>
        </div>

        <!-- Action -->
        <div class="d-flex align-items-lg-center mt-3 mt-lg-0">
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Iniciar sesión
          </button>

          <!-- Modal -->
          <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <form action="validar.php" method="post">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>

                  <div class="modal-body">
                    <div class="mb-3 text-center logotopm">
                      <img style="width:40%;" src="images/logo.png" alt="">
                      <p style="margin-top:10px; color:#1f1f1f !important;">Ingresa tus credencials de acceso</p>
                    </div>
                    <div class="mb-3">
                      <label for="user" class="form-label">Usuario</label>
                      <input type="text" class="form-control" id="user" name="user" required>
                    </div>

                    <div class="mb-3">
                      <label for="pass" class="form-label">Contraseña</label>
                      <input type="password" class="form-control" id="pass" name="pass" required>
                    </div>
                  </div>

                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Iniciar sesión</button>
                  </div>

                </div>
              </div>
            </form>
          </div>

        </div>
      </div>
    </div>
  </div>
</nav>

<script src="js/menu.js"></script>