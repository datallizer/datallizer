<?php
session_start();
if(!$_SESSION['user']){
// si no hay sesion del usuario, es decir no esta logeado lo redirijo a la pagina de login
    header("Location: index.php");
     exit();
}
require 'dbcon.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Predios Vía Levana | Levana</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="shortcut icon" href="assets/img/favicon.png">
    <link rel="stylesheet" href="css/styles.css">
    <meta name="description" content="El mejor desarrollo inmobiliario en Aguascalientes. Bienestar, comunidad y comodidad para nuestros residentes.">
    <meta name="keywords" content="levana, vida levana, predios, lotes, fraccionamiento, desarrollo, inmobiliario, Aguascalientes, terrenos">
    <meta name="author" content="Vida Levana">
    <meta property="og:title" content="Predios Vía Levana | Levana">
    <meta property="og:description" content="El mejor desarrollo inmobiliario en Aguascalientes. Bienestar, comunidad y comodidad para nuestros residentes.">
    <meta property="og:image" content="images/ogportada.jpg">
    <meta property="og:url" content="https://vidalevana.com">
</head>
<body>

<?php include 'menu.php'; ?>

<div class="container-fluid">
<div class="row justify-content-center align-items-center" style="margin-top:120px">
    <div class="col-md-8">
        <div class="card text-center">
            <div class="card-header">
            <a href="logout.php" class="btn btn-danger float-end">Cerrar Sesión</a>
            <a href="lotes.php" class="btn btn-primary float-end">Paseo Levana</a>
                <h4>PREDIOS VÍA LEVANA</h4>
            </div>
            <div class="card-body" style="overflow-y:scroll;">
            <?php include('message.php'); ?>
                <table class="table table-bordered table-striped" style="width: 100%;">
                    <thead>
                        <tr>
                            <th>Lote</th>
                            <th>Área m2</th>
                            <th>Precio</th>
                            <th>Estatus</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
$query = "SELECT * FROM lotesvia";
$query_run = mysqli_query($con, $query);

if(mysqli_num_rows($query_run) > 0)
{
    foreach($query_run as $registro)
    {
        ?>
        <tr>
        <form action="codelotes.php" method="POST">
            <input type="hidden" name="id" value="<?= $registro['id']; ?>">
            <td><?= $registro['id']; ?> </td>
            <td>
                <div class="form-floating">
                <input type="text" class="form-control" name="lvnPM2" id="lvnPM2" value="<?= $registro['lvnPM2']; ?>" id="floatingInput" placeholder="m2">
                <label style="margin-left: 0px;" for="floatingInput">Área m2</label>
                </div>
            </td>
            <td>
                <div class="form-floating">
                <input type="text" class="form-control" name="lvnP18" id="lvnP18" value="<?= $registro['lvnP18']; ?>" id="floatingInput" placeholder="m2">
                <label style="margin-left: 0px;" for="floatingInput">Precio</label>
                </div>
            </td>
            <td>
                <div class="form-check form-switch">
                    <?php
                        $estatus = $registro['estatus'];

                        $switchHtml = '<input type="checkbox" role="switch" class="form-check-input" name="estatus" id="estatus" value="1"';
                        if ($estatus == 1) {
                            $switchHtml .= ' checked';
                            echo '<label for="estatus" class="form-check-label">Vendido</label>';
                        } else {
                            echo '<label for="estatus" class="form-check-label">Disponible</label>';
                        }
                        $switchHtml .= '>';
                        echo $switchHtml;
                    ?>
                </div>
            </td>
            <td>
                <button type="submit" name="updatedos" class="btn btn-secondary">
                    Guardar cambios
                </button>
            </td>
        </form>
        </tr>
        <?php
    }
}
else
{
    echo "<td><h5> No Record Found </h5></td><td></td><td></td><td></td>";
}
?>
                        
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
</div>

<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#111111" fill-opacity="1" d="M0,128L80,117.3C160,107,320,85,480,90.7C640,96,800,128,960,144C1120,160,1280,160,1360,160L1440,160L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path></svg>
<?php include 'footer.php'; ?>

<script>
    // Espera a que la página esté completamente cargada
    document.addEventListener("DOMContentLoaded", function() {
        // Obtiene el switch
        var switchEstatus = document.getElementById("switch-estatus");
        
        // Detecta el evento "change" del switch
        switchEstatus.addEventListener("change", function() {
            // Obtiene el nuevo valor de estatus
            var nuevoEstatus = switchEstatus.checked ? 1 : 0;

            // Envía una solicitud de actualización a través de AJAX
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "actualizar-lote.php");
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.onload = function() {
                // Maneja la respuesta de la solicitud de actualización
                if (xhr.status === 200) {
                    console.log(xhr.responseText);
                } else {
                    console.error(xhr.statusText);
                }
            };
            xhr.send("&estatus=" + nuevoEstatus + "&lvnPM2=" + lvnPM2 + "&lvnP18=" + lvnP18);
        });
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>

