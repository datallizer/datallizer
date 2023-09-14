<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete']))
{
    $registro_id = mysqli_real_escape_string($con, $_POST['delete']);

    $query = "DELETE FROM solicitudesreclutamiento WHERE id='$registro_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        header("Location: exito.html");
        exit(0);
    }
    else
    {
        header("Location: error.html");
        exit(0);
    }
}

if(isset($_POST['update']))
{
    $nombre = mysqli_real_escape_string($con, $_POST['nombre']);
    $apellidos = mysqli_real_escape_string($con, $_POST['apellidos']);
    $telefono = mysqli_real_escape_string($con, $_POST['telefono']);
    $mail = mysqli_real_escape_string($con, $_POST['mail']);
    $estado = mysqli_real_escape_string($con, $_POST['estado']);
    $nivelingles = mysqli_real_escape_string($con, $_POST['nivelingles']);
    $nivelestudios = mysqli_real_escape_string($con, $_POST['nivelestudios']);
    $carrera = mysqli_real_escape_string($con, $_POST['carrera']);

    $query = "UPDATE solicitudesreclutamiento SET nombre='$nombre', apellidos='$apellidos', telefono='$telefono', mail='$mail', estado='$estado',
    nivelingles='$nivelingles', nivelestudios='$nivelestudios', carrera='$carrera'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        header("Location: exito.html");
        exit(0);
    }
    else
    {
        header("Location: error.html");
        exit(0);
    }

}


if(isset($_POST['save']))
{
    $nombre = mysqli_real_escape_string($con, $_POST['nombre']);
    $apellidos = mysqli_real_escape_string($con, $_POST['apellidos']);
    $telefono = mysqli_real_escape_string($con, $_POST['telefono']);
    $mail = mysqli_real_escape_string($con, $_POST['mail']);
    $estado = mysqli_real_escape_string($con, $_POST['estado']);
    $nivelingles = mysqli_real_escape_string($con, $_POST['nivelingles']);
    $nivelestudios = mysqli_real_escape_string($con, $_POST['nivelestudios']);
    $carrera = mysqli_real_escape_string($con, $_POST['carrera']);

    $query = "INSERT INTO solicitudesreclutamiento SET nombre='$nombre', apellidos='$apellidos', telefono='$telefono', mail='$mail', estado='$estado',
    nivelingles='$nivelingles', nivelestudios='$nivelestudios', carrera='$carrera'";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        header("Location: exito.html");
        exit(0);
    }
    else
    {
        header("Location: error.html");
        exit(0);
    }
}

?>

