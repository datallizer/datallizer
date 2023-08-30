<?php
session_start();
require '../dbcon.php';
// Verificar si existe una sesión activa y los valores de usuario y contraseña están establecidos
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];

    // Consultar la base de datos para verificar si los valores coinciden con algún registro en la tabla de usuarios
    $query = "SELECT * FROM usuarios WHERE username = '$username'";
    $result = mysqli_query($con, $query);

    // Si se encuentra un registro coincidente, el usuario está autorizado
    if (mysqli_num_rows($result) > 0) {
        // El usuario está autorizado, se puede acceder al contenido
    } else {
        // Redirigir al usuario a una página de inicio de sesión
        header('Location: login.php');
        exit(); // Finalizar el script después de la redirección
    }
} else {
    // Redirigir al usuario a una página de inicio de sesión si no hay una sesión activa
    header('Location: login.php');
    exit(); // Finalizar el script después de la redirección
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Usuarios | Administrador</title>
    <link rel="stylesheet" href="../css/admin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="shortcut icon" type="image/x-icon" href="../images/ico.ico" />
</head>

<body>
    <?php include 'sidenav.php'; ?>

    <div class="container-fluid">
        <div class="row userrow">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>USUARIOS
                            <a href="nuevousuario.php" class="btn btn-primary btn-sm float-end">Nuevo usuario</a>
                            <a style="margin:0px 5px;" href="dashboard.php" class="btn btn-dark btn-sm float-end">Inicio</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped" style="width: 100%;">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Username</th>
                                    <th>Rol</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = "SELECT * FROM usuarios";
                                $query_run = mysqli_query($con, $query);

                                if (mysqli_num_rows($query_run) > 0) {
                                    foreach ($query_run as $registro) {
                                ?>
                                        <tr>
                                            <td><?= $registro['nombre']; ?> <?= $registro['apellidopaterno']; ?> <?= $registro['apellidomaterno']; ?></td>
                                            <td><?= $registro['username']; ?></td>
                                            <td>
                                                <?php
                                                if ($registro['rol_id'] === "1") {
                                                    echo "Administrador";
                                                } else if ($registro['rol_id'] === "2") {
                                                    echo "Colaborador";
                                                } else if ($registro['rol_id'] === "3") {
                                                    echo "Recluta";
                                                } else if ($registro['rol_id'] === "4") {
                                                    echo "Analista";
                                                } else if ($registro['rol_id'] === "5") {
                                                } else {
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <a href="verusuario.php?id=<?= $registro['id']; ?>" class="btn btn-info btn-sm">Ver</a>

                                                <a href="editarusuario.php?id=<?= $registro['id']; ?>" class="btn btn-success btn-sm">Editar</a>
                                                <form action="usercode.php" method="POST" class="d-inline">
                                                    <button type="submit" name="delete" value="<?= $registro['id']; ?>" class="btn btn-danger btn-sm">Borrar</button>
                                                </form>

                                            </td>
                                        </tr>
                                <?php
                                    }
                                } else {
                                    echo "<h5> No Record Found </h5>";
                                }
                                ?>

                            </tbody>
                        </table>

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
                    <h1 class="modal-title fs-5" id="exampleModalLabel">NUEVA ADMISIÓN</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="codeadmisiones.php" method="post" class="row">
                        <div class="col-12 mb-3 form-floating">
                            <select class="form-select" name="asesor" id="asesor">
                                <option disabled selected>Seleccione un asesor</option>
                                <?php
                                // Consulta a la base de datos para obtener los usuarios con rol igual a 3
                                $query = "SELECT id, nombre, apellidop, apellidom FROM usuarios WHERE rol = 3";
                                $result = mysqli_query($con, $query);

                                // Verificar si hay resultados
                                if (mysqli_num_rows($result) > 0) {
                                    while ($usuario = mysqli_fetch_assoc($result)) {
                                        // Construir el texto de la opción con nombre y apellidos del usuario
                                        $opcion = $usuario['nombre'] . " " . $usuario['apellidop'] . " " . $usuario['apellidom'];
                                        // Obtener el ID del usuario
                                        $idUsuario = $usuario['id'];
                                        // Mostrar la opción con el valor igual al ID del usuario
                                        echo "<option value='$idUsuario' " . ($registro['asesor'] == $idUsuario ? 'selected' : '') . ">$opcion</option>";
                                    }
                                }
                                ?>
                            </select>
                            <label style="margin-left: 10px;" for="asesor">Asesor</label>

                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput nombre" name="nombre" required placeholder="Nombre" autocomplete="off" pattern="[a-zA-Z\s]{1-50}">
                            <label style="margin-left: 12px;" for="floatingInput">Nombre(s)</label>
                        </div>
                        <div class="form-floating mb-3 col-12 col-md-6">
                            <input type="text" class="form-control" id="floatingInput apellidop" name="apellidop" required placeholder="Apellido paterno" autocomplete="off" pattern="[a-zA-Z\s]{1-50}">
                            <label style="margin-left: 12px;" for="floatingInput">Apellido paterno</label>
                        </div>
                        <div class="form-floating mb-3 col-12 col-md-6">
                            <input type="text" class="form-control" id="floatingInput apellidom" name="apellidom" required placeholder="Apellido materno" autocomplete="off" pattern="[a-zA-Z\s]{1-50}">
                            <label style="margin-left: 12px;" for="floatingInput">Apellido materno</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput email" name="email" placeholder="Correo" autocomplete="off" pattern="[a-zA-Z\s]{1-50}">
                            <label style="margin-left: 12px;" for="floatingInput">Correo electronico</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput telefono" name="telefono" required placeholder="Teléfono" autocomplete="off" minlength="10" maxlength="10" pattern="[0-9]{1,10}">
                            <label style="margin-left: 12px;" for="floatingInput">Teléfono</label>
                        </div>
                        <div class="form-floating mb-3">
                            <select class="form-select" id="floatingSelectModalidad" name="modalidad" autocomplete="off" onchange="toggleCarreraDiv()">
                                <option value="1">Bachillerato</option>
                                <option value="2">Licenciatura escolarizada</option>
                                <option value="3">Licenciatura ejecutiva</option>
                                <option value="4">Bristol English Academy Basic W</option>
                                <option value="5">Bristol English Academy Basic S</option>
                                <option value="6">Bristol English Academy Gold</option>
                                <option value="7">Bristol English Academy Kids</option>
                                <option value="8">Curso de verano</option>
                            </select>
                            <label style="margin-left: 12px;" for="floatingSelectModalidad">Modalidad</label>
                        </div>

                        <div class="form-floating mb-3" id="carreraDiv" style="display: none;">
                            <select class="form-select" id="floatingSelectCarrera" name="carrera" autocomplete="off">
                                <option value="0">Selecciona una opción</option>
                                <option value="1">Lic.Derecho</option>
                                <option value="2">Lic.Psicología</option>
                                <option value="3">Lic.Psicopedagogía</option>
                                <option value="4">Lic.Administración y estrategia de negocios</option>
                                <option value="5">Lic.Dirección de estrategia de contenido</option>
                                <option value="6">Ing.Industrial</option>
                                <option value="7">Ing.Mecanica y electrónica automotriz</option>
                            </select>
                            <label style="margin-left: 12px;" for="floatingSelectCarrera">Carrera</label>
                        </div>
                        <div class="form-floating mb-3 col-12 col-md-12" id="procedenciaDiv" style="display: none;">
                            <input type="text" class="form-control" id="floatingInput procedencia" name="procedencia" placeholder="Procedencia" autocomplete="off" pattern="[a-zA-Z\s]{1-50}">
                            <label style="margin-left: 12px;" for="floatingInput">Preparatoría de procedencia</label>
                        </div>

                        <div class="form-floating mb-3">
                            <select class="form-select" id="enteraste" name="enteraste" autocomplete="off">
                                <option selected>Selecciona una opción</option>
                                <option value="Facebook">Facebook</option>
                                <option value="Instagram">Instagram</option>
                                <option value="WhatsApp">WhatsApp</option>
                                <option value="TikTok">TikTok</option>
                                <option value="Radio">Radio</option>
                                <option value="Visitas">Visitas</option>
                                <option value="Recomendacion">Recomendación</option>
                                <option value="Otro">Otro</option>
                            </select>
                            <label style="margin-left: 8px;" for="enteraste">¿Cómo nos conociste?</label>
                        </div>

                        <div class="form-floating mb-3">
                            <select class="form-select" id="estatus" name="estatus" autocomplete="off">
                                <option selected>Selecciona una opción</option>
                                <option value="1">Pendiente de contacto</option>
                                <option value="2">Llamada / WhatsApp</option>
                                <option value="3">Citado/a</option>
                                <option value="4">Pendiente de pago</option>
                                <option value="5">Pagado / Doctos. pendientes</option>
                                <option value="6">Citado/a</option>
                            </select>
                            <label style="margin-left: 8px;" for="estatus">Estatus</label>
                        </div>

                        <p style="font-size: 12px;">Todos los campos son obligatorios*</p>
                        <div class="col-12 text-center">
                            <button class="btn btn-primary btn-sm mt-3 mb-3" type="submit" name="crm">Registrar admisión</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>