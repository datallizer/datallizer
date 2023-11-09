<?php
require 'dbcon.php';

if(isset($_POST['delete']))
{
    $registro_id = mysqli_real_escape_string($con, $_POST['delete']);

    $query = "DELETE FROM cotizaciones WHERE id='$registro_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        header("Location: cotizacioneseguros.php");
        $_SESSION['message'] = "Usuario eliminado exitosamente";
        exit(0);
    }
    else
    {
        header("Location: cotizacioneseguros.php");
        $_SESSION['message'] = "Error al eliminar el usuario, contácte a soporte";
        exit(0);
    }
}

if(isset($_POST['update']))
{
    $id = mysqli_real_escape_string($con,$_POST['id']);
    $nombre = mysqli_real_escape_string($con, $_POST['nombre']);
    $apellidop = mysqli_real_escape_string($con, $_POST['apellidop']);
    $apellidom = mysqli_real_escape_string($con, $_POST['apellidom']);
    $telefono = mysqli_real_escape_string($con, $_POST['telefono']);
    $servicio = mysqli_real_escape_string($con, $_POST['servicio']);
    $detalles = mysqli_real_escape_string($con, $_POST['detalles']);
    $estatus = mysqli_real_escape_string($con, $_POST['estatus']);

    $query = "UPDATE `cotizaciones` SET `nombre` = '$nombre', `apellidop` = '$apellidop', `apellidom` = '$apellidom', `telefono` = '$telefono', `servicio` = '$servicio', `detalles` = '$detalles', `estatus` = '$estatus' WHERE `cotizaciones`.`id` = '$id'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Usuario editado exitosamente";
        header("Location: cotizacioneslitigio.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Error al editar el usuario, contácte a soporte";
        header("Location: cotizacioneslitigio.php");
        exit(0);
    }
}



if(isset($_POST['save']))
{
    $nombre = mysqli_real_escape_string($con, $_POST['nombre']);
    $apellidop = mysqli_real_escape_string($con, $_POST['apellidop']);
    $apellidom = mysqli_real_escape_string($con, $_POST['apellidom']);
    $telefono = mysqli_real_escape_string($con, $_POST['telefono']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $servicio = mysqli_real_escape_string($con, $_POST['servicio']);
    $detalles = mysqli_real_escape_string($con, $_POST['detalles']);
    $estatus = mysqli_real_escape_string($con, $_POST['estatus']);

    $query = "INSERT INTO cotizaciones SET nombre='$nombre', apellidop='$apellidop', apellidom='$apellidom', telefono='$telefono', email='$email', servicio='$servicio', detalles='$detalles', estatus='$estatus', identificador='2'";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Cotización creada exitosamente";
        header("Location: cotizacioneslitigio.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Error contácte a soporte";
        header("Location: cotizacioneslitigio.php");
        exit(0);
    }
}

if(isset($_POST['cotizacion']))
{
    $nombre = mysqli_real_escape_string($con, $_POST['nombre']);
    $apellidop = mysqli_real_escape_string($con, $_POST['apellidop']);
    $apellidom = mysqli_real_escape_string($con, $_POST['apellidom']);
    $email = $_POST['email'];

    // Valida el correo electrónico
    if(!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        echo "El correo electrónico no es válido.";
        exit(0);
    }

    $telefono = mysqli_real_escape_string($con, $_POST['telefono']);
    $servicio = mysqli_real_escape_string($con, $_POST['servicio']);
    $detalles = mysqli_real_escape_string($con, $_POST['detalles']);

    // Escapa los caracteres especiales en los datos del textarea
    $detalles = str_replace("'", "\'", $detalles);
    $detalles = str_replace("\n", "\\n", $detalles);

    $query = "INSERT INTO cotizaciones SET nombre='$nombre', apellidop='$apellidop', apellidom='$apellidom', email='$email', telefono='$telefono', servicio='$servicio', detalles='$detalles', estatus='1', identificador='1'";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Solicitud enviada exitosamente";
        header("Location: seguros.php#cotizacion");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Error al crear la cotización, contácte a soporte";
        header("Location: seguros.php#cotizacion");
        exit(0);
    }
}

?>