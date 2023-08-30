<?php
session_start();
require '../dbcon.php';

if(isset($_POST['delete']))
{
    $registro_id = mysqli_real_escape_string($con, $_POST['delete']);

    $query = "DELETE FROM cotizaciones WHERE id='$registro_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        header("Location: cotizaciones.php");
        exit(0);
    }
    else
    {
        header("Location: cotizaciones.php");
        exit(0);
    }
}

if(isset($_POST['update']))
{
    $id = mysqli_real_escape_string($con,$_POST['id']);
    $nombre = mysqli_real_escape_string($con, $_POST['nombre']);
    $apellido = mysqli_real_escape_string($con, $_POST['apellido']);
    $telefono = mysqli_real_escape_string($con, $_POST['telefono']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $detalles = mysqli_real_escape_string($con, $_POST['detalles']);

    $sql = "UPDATE `cotizaciones` SET `nombre` = '$nombre', `apellido` = '$apellido', `telefono` = '$telefono', `email` = '$email', `detalles` = '$detalles' WHERE `cotizaciones`.`id` = '$id';";
    $query_run = mysqli_query($con, $sql);

    if($query_run)
    {
        header("Location: cotizaciones.php");
        exit(0);
    }
    else
    {
        header("Location: cotizaciones.php");
        exit(0);
    }

}

?>