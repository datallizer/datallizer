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
    <title>Editar usuario | Alliance broker</title>
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
                <div class="row justify-content-center mt-5 mb-5">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Información de usuario
                                    <a href="monitorusuarios.php" class="btn btn-danger btn-sm float-end">Regresar</a>
                                </h4>
                            </div>
                            <div class="card-body">

                                <?php

                                if (isset($_GET['username'])) {
                                    $registro_id = mysqli_real_escape_string($con, $_GET['username']);
                                    $query = "SELECT * FROM usuarios WHERE username='$registro_id' ";
                                    $query_run = mysqli_query($con, $query);

                                    if (mysqli_num_rows($query_run) > 0) {
                                        $registro = mysqli_fetch_array($query_run);
                                        $rol_actual = $registro['rol'];

                                ?>
                                        <form action="codeusuarios.php" method="POST">
                                            <input type="hidden" name="username" value="<?= $registro['username']; ?>">

                                            <div class="row mt-1">
                                                <div class="col-12 form-floating">
                                                    <input type="text" class="form-control" name="nombre" id="nombre" value="<?= $registro['nombre']; ?>">
                                                    <label for="floatingInput">Nombre</label>
                                                </div>

                                                <div class="col-12 col-md-6 mt-3 form-floating">
                                                    <input type="text" class="form-control" name="apellidop" id="apellidop" value="<?= $registro['apellidop']; ?>">
                                                    <label for="floatingInput">Apellido Paterno</label>
                                                </div>

                                                <div class="col-12 col-md-6 mt-3 form-floating">
                                                    <input type="text" class="form-control" name="apellidom" id="apellidom" value="<?= $registro['apellidom']; ?>">
                                                    <label for="floatingInput">Apellido materno</label>
                                                </div>

                                                <div class="col-12 mt-3 form-floating">
                                                    <input type="text" class="form-control" name="username" id="username" value="<?= $registro['username']; ?>" disabled>
                                                    <label for="floatingInput">Username</label>
                                                </div>

                                                <div class="col-12 col-md-5 mt-3 form-floating">
                                                    <input type="password" class="form-control" name="password" id="password" placeholder="Password" value="<?= $registro['password']; ?>">
                                                    <label for="floatingInput">Password</label>
                                                </div>

                                                <div class="col-12 col-md-7 mt-3 form-floating">
                                                    <select class="form-select" name="rol" id="floatingSelect">
                                                        <option disabled>Seleccione un rol</option>
                                                        <option value="1" <?= ($rol_actual == 1) ? 'selected' : ''; ?>>Administrador</option>
                                                        <option value="2" <?= ($rol_actual == 2) ? 'selected' : ''; ?>>Colaborador general</option>
                                                        <option value="3" <?= ($rol_actual == 3) ? 'selected' : ''; ?>>Colaborador de litigio</option>
                                                        <option value="4" <?= ($rol_actual == 4) ? 'selected' : ''; ?>>Colaborador de seguros</option>
                                                        <option value="5" <?= ($rol_actual == 5) ? 'selected' : ''; ?>>Cliente global</option>
                                                        <option value="6" <?= ($rol_actual == 6) ? 'selected' : ''; ?>>Cliente de seguros</option>
                                                        <option value="7" <?= ($rol_actual == 7) ? 'selected' : ''; ?>>Cliente de litigio</option>
                                                    </select>
                                                    <label for="floatingSelect">Rol</label>
                                                </div>

                                                <div class="col-12 text-center mt-3">
                                                    <button type="submit" name="update" class="btn btn-primary" id="cliente">
                                                        Actualizar usuario
                                                    </button>
                                                </div>
                                        </form>
                            </div>
                    <?php
                                    } else {
                                        echo "<p>No se encontro ningun usuario con este username</p>";
                                    }
                                }
                    ?>
                        </div>
                    </div>

                    <div class="col-md-12 mt-5">
                        <div class="card">
                            <div class="card-header">
                                <h4>Información del cliente
                                    <a href="clienteseguros.php" class="btn btn-danger btn-sm float-end">Regresar</a>
                                </h4>
                            </div>
                            <div class="card-body">

                                <?php

                                if (isset($_GET['username'])) {
                                    $registro_id = mysqli_real_escape_string($con, $_GET['username']);
                                    $query = "SELECT * FROM seguros WHERE username='$registro_id' ";
                                    $query_run = mysqli_query($con, $query);

                                    if (mysqli_num_rows($query_run) > 0) {
                                        $registro = mysqli_fetch_array($query_run);
                                        $servicio_actual = $registro['servicio'];

                                ?>

                                        <form action="codeseguros.php" method="POST" class="row">
                                            <input type="hidden" name="username" value="<?= $registro['username']; ?>">

                                            <div class="col-12 form-floating">
                                                <input type="text" class="form-control" name="username" disabled id="floatingInput" placeholder="Teléfono" value="<?= $registro['username']; ?>">
                                                <label for="floatingInput">Email</label>
                                            </div>

                                            <div class="col-12 col-md-6 mt-3 form-floating">
                                                <input type="text" class="form-control" name="telefono" id="floatingInput" placeholder="Teléfono" value="<?= $registro['telefono']; ?>">
                                                <label for="floatingInput">Teléfono</label>
                                            </div>

                                            <div class="col-12 col-md-6 mt-3 form-floating">
                                                <input type="date" class="form-control" name="fechanacimiento" id="floatingInput" placeholder="Teléfono" value="<?= $registro['fechanacimiento']; ?>">
                                                <label for="floatingInput">Fecha de nacimiento</label>
                                            </div>

                                            <div class="col-12 col-md-12 mt-3 form-floating">
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

                                            <div class="col-12 text-center mt-4">
                                                <button type="submit" name="update" class="btn btn-primary">
                                                    Actualizar cliente
                                                </button>
                                            </div>
                                        </form>
                            </div>
                    <?php
                                    } else {
                                        echo "<p>No se encontro una cotización con este ID</p>";
                                    }
                                }
                    ?>
                        </div>
                    </div>

                    <div class="col-md-12 mt-3" id="files">
                        <div class="card">
                            <div class="card-header">
                                <h4>Documentos asociados
                                    <a href="clienteseguros.php" class="btn btn-danger btn-sm float-end">Regresar</a>
                                </h4>
                            </div>
                            <div class="card-body">
                                <div class="row">

                                    <?php

                                    if (isset($_GET['username'])) {
                                        $registro_id = mysqli_real_escape_string($con, $_GET['username']);
                                        $query = "SELECT * FROM files WHERE username='$registro_id' ";
                                        $query_run = mysqli_query($con, $query);

                                        if (mysqli_num_rows($query_run) > 0) {
                                            foreach ($query_run as $registro) {

                                                $estatus_actual = $registro['estatus'];
                                                $tipo_actual = $registro['tipo'];

                                    ?>
                                                <div class="col-12 col-md-3 filecard p-3 m-1">
                                                    <form action="codefiles.php" method="POST" class="row" enctype="multipart/form-data">
                                                        <input type="hidden" name="username" value="<?= $registro['username']; ?>">

                                                        <div class="col-12 mt-3 form-floating">
                                                            <input type="date" class="form-control" name="fecha" id="floatingInput" placeholder="Fecha" value="<?= $registro['fecha']; ?>" disabled>
                                                            <label for="floatingInput">Fecha de carga</label>
                                                        </div>

                                                        <div class="col-12 mt-3 form-floating">
                                                            <select class="form-select" name="tipo" id="floatingSelect" disabled>
                                                                <option disabled>Seleccione una opción</option>
                                                                <option value="1" <?= ($tipo_actual == 1) ? 'selected' : ''; ?>>Poliza de seguro</option>
                                                                <option value="2" <?= ($tipo_actual == 2) ? 'selected' : ''; ?>>Recibo de pago</option>
                                                                <option value="3" <?= ($tipo_actual == 3) ? 'selected' : ''; ?>>Factura</option>
                                                                <option value="4" <?= ($tipo_actual == 4) ? 'selected' : ''; ?>>Cotización</option>
                                                                <option value="5" <?= ($tipo_actual == 5) ? 'selected' : ''; ?>>Contrato</option>
                                                                <option value="6" <?= ($tipo_actual == 6) ? 'selected' : ''; ?>>Documento informativo</option>
                                                                <option value="7" <?= ($tipo_actual == 7) ? 'selected' : ''; ?>>Otro</option>
                                                            </select>
                                                            <label for="floatingSelect">Tipo de documento</label>
                                                        </div>

                                                        <div class="col-12 mt-3 form-floating">
                                                            <select class="form-select" name="servicio" id="floatingSelect">
                                                                <option disabled>Seleccione una opción</option>
                                                                <option value="1" <?= ($estatus_actual == 1) ? 'selected' : ''; ?>>Visible al cliente</option>
                                                                <option value="2" <?= ($estatus_actual == 2) ? 'selected' : ''; ?>>Oculto al cliente</option>
                                                            </select>
                                                            <label for="floatingSelect">Estatus del documento</label>
                                                        </div>

                                                        <div class="col-12 mt-3 form-floating">
                                                            <textarea style="min-height:120px;" class="form-control" name="detalles" id="detalles"><?= $registro['detalles']; ?></textarea>
                                                            <label for="detalles">Detalles</label>
                                                        </div>

                                                        <div class="col-12 text-center mt-4">
                                                            <button type="submit" name="update" class="btn btn-sm btn-primary">
                                                                Actualizar
                                                            </button>
                                                            <form action="codefiles.php" method="POST" class="d-inline">
                                                            <button type="submit" name="delete" value="<?= $registro['id']; ?>" class="btn btn-danger btn-sm">Borrar</button>
                                                        </form>
                                                        </div>
                                                    </form>
                                                </div>
                                    <?php
                                            }
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
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>