<?php
require 'dbcon.php';

if(isset($_POST['delete']))
{
    $registro_id = mysqli_real_escape_string($con, $_POST['delete']);

    $query = "DELETE FROM files WHERE id='$registro_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Archivo eliminado exitosamente";
        header("Location: polizas.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Error al eliminar el archivo, contácte a soporte";
        header("Location: polizas.php");
        exit(0);
    }
}

if(isset($_POST['update']))
{
    $id = mysqli_real_escape_string($con,$_POST['id']);
    $nombre = mysqli_real_escape_string($con, $_POST['nombre']);
    $apellidop = mysqli_real_escape_string($con, $_POST['apellidop']);
    $apellidom = mysqli_real_escape_string($con, $_POST['apellidom']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $rol = mysqli_real_escape_string($con, $_POST['rol']);

    // Encriptar la nueva contraseña
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $query = "UPDATE `usuarios` SET `nombre` = '$nombre', `apellidop` = '$apellidop', `apellidom` = '$apellidom', `password` = '$hashed_password', `rol` = '$rol' WHERE `usuarios`.`id` = '$id'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Usuario editado exitosamente";
        header("Location: monitorusuarios.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Error al editar el usuario, contácte a soporte";
        header("Location: monitorusuarios.php");
        exit(0);
    }
}



if(isset($_POST['save']))
{
    $medio =addslashes (file_get_contents($_FILES['medio']['tmp_name']));
    $tipo = mysqli_real_escape_string($con, $_POST['tipo']);
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $estatus = mysqli_real_escape_string($con, $_POST['estatus']);
    $fecha = mysqli_real_escape_string($con, $_POST['fecha']);
    $detalles = mysqli_real_escape_string($con, $_POST['detalles']);

    $query = "INSERT INTO files SET medio='$medio', tipo='$tipo', username='$username', estatus='$estatus', fecha='$fecha', detalles='$detalles'";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Archivo subido exitosamente";
        header("Location: polizas.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Error al subir el archivo, contacte a soporte";
        header("Location: polizas.php");
        exit(0);
    }
}


?>