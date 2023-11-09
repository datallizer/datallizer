<?php
session_start();
require 'dbcon.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar cotización | Alliance broker</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="shortcut icon" type="image/x-icon" href="images/ico.ico" />
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="sb-nav-fixed">
    <?php include 'sidenav.php'; ?>
    <div id="layoutSidenav">
        <div id="layoutSidenav_content">
            <div class="container">
                <div class="row justify-content-center mb-5 mt-5">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Editar cotización
                                    <a href="cotizacioneseguros.php" class="btn btn-danger btn-sm float-end">Regresar</a>
                                </h4>
                            </div>
                            <div class="card-body">

                                <?php
                                
                                if (isset($_GET['id'])) {
                                    $registro_id = mysqli_real_escape_string($con, $_GET['id']);
                                    $query = "SELECT * FROM cotizaciones WHERE id='$registro_id' ";
                                    $query_run = mysqli_query($con, $query);

                                    if (mysqli_num_rows($query_run) > 0) {
                                        $registro = mysqli_fetch_array($query_run);
                                        $servicio_actual = $registro['servicio'];
                                        $estatus_actual = $registro['estatus'];
                                        $identificador_actual = $registro['identificador'];

                                ?>
                                
                                        <form action="codeseguros.php" method="POST" class="row">
                                            <input type="hidden" name="id" value="<?= $registro['id']; ?>">

                                                <div class="col-12 form-floating">
                                                    <input type="text" class="form-control" name="nombre" id="floatingInput" placeholder="Teléfono" value="<?= $registro['nombre']; ?>">
                                                    <label for="floatingInput">Nombre</label>
                                                </div>

                                                <div class="col-12 col-md-6 mt-3 form-floating">
                                                    <input type="text" class="form-control" name="apellidop" id="floatingInput" placeholder="Teléfono" value="<?= $registro['apellidop']; ?>">
                                                    <label for="floatingInput">Apellido paterno</label>
                                                </div>

                                                <div class="col-12 col-md-6 mt-3 form-floating">
                                                    <input type="text" class="form-control" name="apellidom" id="floatingInput" placeholder="Teléfono" value="<?= $registro['apellidom']; ?>">
                                                    <label for="floatingInput">Apellido materno</label>
                                                </div>

                                                <div class="col-12 mt-3 form-floating">
                                                    <input type="email" class="form-control" name="email" id="floatingInput" placeholder="Email" value="<?= $registro['email']; ?>" disabled>
                                                    <label for="floatingInput">Email</label>
                                                </div>

                                                <div class="col-12 col-md-5 mt-3 form-floating">
                                                    <input type="text" class="form-control" name="telefono" id="floatingInput" placeholder="Teléfono" value="<?= $registro['telefono']; ?>">
                                                    <label for="telefono">Teléfono</label>
                                                </div>

                                                <div class="col-12 col-md-7 mt-3 form-floating">
                                                <select class="form-select" name="servicio" id="floatingSelect">
                                                    <option disabled>Seleccione una opción</option>
                                                    <option value="1" <?= ($servicio_actual == 1) ? 'selected' : ''; ?>>Transporte de mercancía</option>
                                                    <option value="2" <?= ($servicio_actual == 2) ? 'selected' : ''; ?>>Daño empresarial</option>
                                                    <option value="3" <?= ($servicio_actual == 3) ? 'selected' : ''; ?>>Responsabilidad civil y ecológica</option>
                                                    <option value="4" <?= ($servicio_actual == 4) ? 'selected' : ''; ?>>Seguro para empleados</option>
                                                    <option value="5" <?= ($servicio_actual == 5) ? 'selected' : ''; ?>>Seguro de gastos médicos</option>
                                                    <option value="5" <?= ($servicio_actual == 6) ? 'selected' : ''; ?>>Seguro de vida</option>
                                                    <option value="5" <?= ($servicio_actual == 7) ? 'selected' : ''; ?>>Seguro de auto perticular y flotillas</option>
                                                    <option value="5" <?= ($servicio_actual == 8) ? 'selected' : ''; ?>>Seguro personal</option>
                                                    <option value="5" <?= ($servicio_actual == 9) ? 'selected' : ''; ?>>Seguro a casa habitación</option>
                                                    <option value="5" <?= ($servicio_actual == 10) ? 'selected' : ''; ?>>Maquinaria y equipo</option>
                                                    <option value="5" <?= ($servicio_actual == 11) ? 'selected' : ''; ?>>Seguros escolares</option>
                                                </select>
                                                <label for="floatingSelect">Seguro de interes</label>
                                                </div>

                                                <div class="col-12 mt-3 form-floating">
                                                    <textarea style="min-height:120px;" class="form-control" name="detalles" id="detalles"><?= $registro['detalles']; ?></textarea>
                                                    <label for="detalles">Detalles</label>
                                                </div>

                                                <div class="col-12 col-md-6 mt-3 form-floating">
                                                <select class="form-select" name="estatus" id="floatingSelect">
                                                    <option disabled>Seleccione una opción</option>
                                                    <option value="1" <?= ($estatus_actual == 1) ? 'selected' : ''; ?>>Nueva cotización</option>
                                                    <option value="2" <?= ($estatus_actual == 2) ? 'selected' : ''; ?>>Se contácto al interesado</option>
                                                    <option value="3" <?= ($estatus_actual == 3) ? 'selected' : ''; ?>>El interesado no respondio</option>
                                                    <option value="4" <?= ($estatus_actual == 4) ? 'selected' : ''; ?>>Volver a contáctar</option>
                                                    <option value="5" <?= ($estatus_actual == 5) ? 'selected' : ''; ?>>Finalizado</option>
                                                </select>
                                                <label for="floatingSelect">Estatus de la cotización</label>
                                                </div>

                                                <div class="col-12 col-md-6 mt-3 form-floating">
                                                <select class="form-select" name="identificador" id="floatingSelect" disabled>
                                                    <option disabled>Seleccione una opción</option>
                                                    <option value="1" <?= ($identificador_actual == 1) ? 'selected' : ''; ?>>Seguro</option>
                                                    <option value="2" <?= ($identificador_actual == 2) ? 'selected' : ''; ?>>Litigio</option>
                                                </select>
                                                <label for="floatingSelect">Servicio solicitado</label>
                                                </div>

                                                <div class="col-12 text-center mt-4">
                                                    <button type="submit" name="update" class="btn btn-primary">
                                                        Actualizar cotización
                                                    </button>
                                                </div>

                            </div>

                            </form>
                    <?php
                                    } else {
                                        echo "<p>No se encontro una cotización con este ID</p>";
                                    }
                                }
                    ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">NUEVO USUARIO</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="codeusuarios.php" method="POST">
                        <div class="row">
                            <div class="col-12 mtop">
                                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre" autocomplete="off" required>
                            </div>

                            <div class="col-6 mtop">
                                <input type="text" class="form-control" name="apellidop" id="apellidop" placeholder="Apellido paterno" autocomplete="off" required>
                            </div>

                            <div class="col-6 mtop">
                                <input type="text" class="form-control" name="apellidom" id="apellidom" placeholder="Apellido materno" autocomplete="off" required>
                            </div>

                            <div class="col-5 mtop">
                                <input type="text" class="form-control" name="username" id="username" placeholder="Nombre de usuario" autocomplete="off" required>
                            </div>

                            <div class="col-7 mtop">
                                <input type="password" class="form-control" name="password" id="password" placeholder="Password" autocomplete="off" required>
                            </div>

                            <div class="col-12 mtop">
                                <select class="form-select" name="rol" id="rol" autocomplete="off" required>
                                    <option disabled>Categoría</option>
                                    <option value="1">Bachillerato</option>
                                    <option value="2">Licenciatura escolarizada</option>
                                    <option value="3">Licenciatura ejecutiva</option>
                                    <option value="4">Administrador</option>
                                    <option value="5">Control escolar</option>
                                </select>
                            </div>
                        </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary" name="save">Guardar</button>
                </div>
                </form>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>