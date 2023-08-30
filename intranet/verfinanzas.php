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
    <title>Finanzas | Administrador</title>
    <link rel="stylesheet" href="../css/admin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>

<body>
    <?php include 'sidenav.php'; ?>

    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Datos Finanzas
                            <a href="finanzas.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if (isset($_GET['id'])) {
                            $registro_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM finanzas WHERE id='$registro_id' ";
                            $query_run = mysqli_query($con, $query);

                            if (mysqli_num_rows($query_run) > 0) {
                                $registro = mysqli_fetch_array($query_run);
                        ?>
                                <form action="code.php" method="POST">
                                    <input type="hidden" name="registro_id" value="<?= $registro['id']; ?>">

                                    <div class="row">
                                        <div class="col-4">
                                            <label for="nombreProyecto" class="form-label">Nombre del Proyecto</label>
                                            <input type="text" class="form-control" name="nombreProyecto" id="nombreProyecto" value="<?= $registro['nombreProyecto']; ?>" disabled>
                                        </div>

                                        <div class="col-4">
                                            <label for="cotizacionTotal" class="form-label">Cotizacion Total</label>
                                            <input type="text" class="form-control" name="cotizacionTotal" id="cotizacionTotal" value="<?= $registro['cotizacionTotal']; ?>" disabled>
                                        </div>

                                        <div class="col-4">
                                            <label for="costoDesarrollo" class="form-label">Cotizacion de Desarrollo</label>
                                            <input type="text" class="form-control" name="costoDesarrollo" id="costoDesarrollo" value="<?= $registro['costoDesarrollo']; ?>" disabled>
                                        </div>

                                        <div class="col-4">
                                            <label for="dominio" class="form-label">Dominio</label>
                                            <input type="text" class="form-control" name="dominio" id="dominio" value="<?= $registro['dominio']; ?>" disabled>
                                        </div>

                                        <div class="col-4">
                                            <label for="hosting" class="form-label">Hosting</label>
                                            <input type="text" class="form-control" name="hosting" id="hosting" value="<?= $registro['hosting']; ?>" disabled>
                                        </div>

                                        <div class="col-4">
                                            <label for="sslCampo" class="form-label">SSL</label>
                                            <input type="text" class="form-control" name="sslCampo" id="sslCampo" value="<?= $registro['sslCampo']; ?>" disabled>
                                        </div>

                                        <div class="col-4">
                                            <label for="otros" class="form-label">Otros</label>
                                            <input type="text" class="form-control" name="otros" id="otros" value="<?= $registro['otros']; ?>" disabled>
                                        </div>

                                        <div class="col-4">
                                            <label for="pagoDesarrolladores" class="form-label">Pago a Desarrolladores</label>
                                            <input type="text" class="form-control" name="pagoDesarrolladores" id="pagoDesarrolladores" value="<?= $registro['pagoDesarrolladores']; ?>" disabled>
                                        </div>

                                        <div class="col-2">
                                            <label for="iva" class="form-label">IVA</label>
                                            <input type="text" class="form-control" name="iva" id="iva" value="<?= $registro['iva']; ?>" disabled>
                                        </div>

                                        <div class="col-4">
                                            <label for="gananciaFinal" class="form-label">Ganancia Final</label>
                                            <input type="text" class="form-control" name="gananciaFinal" id="gananciaFinal" value="<?= $registro['gananciaFinal']; ?>" disabled>
                                        </div>

                                        <div class="col-4">
                                            <label for="fechaInicio" class="form-label">Fecha de Inicio</label>
                                            <input type="text" class="form-control" name="fechaInicio" id="fechaInicio" value="<?= $registro['fechaInicio']; ?>" disabled>
                                        </div>

                                        <div class="col-4">
                                            <label for="fechaTermino" class="form-label">Fecha de Termino</label>
                                            <input type="text" class="form-control" name="fechaTermino" id="fechaTermino" value="<?= $registro['fechaTermino']; ?>" disabled>
                                        </div>

                                        <div class="col-6">
                                            <label for="montoPagado" class="form-label">Monto Pagado</label>
                                            <input type="text" class="form-control" name="montoPagado" id="montoPagado" value="<?= $registro['montoPagado']; ?>" disabled>
                                        </div>

                                        <div class="col-6">
                                            <label for="pendientePagar" class="form-label">Pendiente a Pagar</label>
                                            <input type="text" class="form-control" name="pendientePagar" id="pendientePagar" value="<?= $registro['pendientePagar']; ?>" disabled>
                                        </div>
                                    </div>

                    </div>
                </div>

                </form>
        <?php
                            } else {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
        ?>
            </div>
        </div>
    </div>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>