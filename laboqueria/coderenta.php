<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete']))
{
    $id = mysqli_real_escape_string($con, $_POST['delete']);

    $query = "DELETE FROM renta WHERE id='$id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Eliminado con exito";
        header("Location: monitorautomoviles.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "No se pudo eliminar, contace a su proveedor";
        header("Location: monitorautomoviles.php");
        exit(0);
    }
}

if(isset($_POST['update']))
{
    $id = mysqli_real_escape_string($con,$_POST['id']);
    $titulo = mysqli_real_escape_string($con, $_POST['titulo']);
    $descripcion = mysqli_real_escape_string($con, $_POST['descripcion']);
    $categoria = mysqli_real_escape_string($con, $_POST['categoria']);
    $costo = mysqli_real_escape_string($con, $_POST['costo']);
    $estado = mysqli_real_escape_string($con, $_POST['estado']);
    //$imagen =addslashes (file_get_contents($_FILES['imagen']['tmp_name']));
   
    $query = "UPDATE renta SET titulo='$titulo', descripcion='$descripcion', categoria='$categoria', estado='$estado', costo='$costo', imagen='$imagen'  WHERE id = $id; ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Se actualizo exitosamente";
        header("Location: monitorautomoviles.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "No se pudo actualizar, contacte a su proveedor";
        header("Location: monitorautomoviles.php");
        exit(0);
    }

}


if(isset($_POST['save']))
{
    $titulo = mysqli_real_escape_string($con, $_POST['titulo']);
    $descripcion = mysqli_real_escape_string($con, $_POST['descripcion']);
    $categoria = mysqli_real_escape_string($con, $_POST['categoria']);
    $costo = mysqli_real_escape_string($con, $_POST['costo']);
    $estado = mysqli_real_escape_string($con, $_POST['estado']);
    $imagen =addslashes (file_get_contents($_FILES['imagen']['tmp_name']));

    $query = "INSERT INTO renta SET titulo='$titulo', descripcion='$descripcion', categoria='$categoria', estado='$estado', costo='$costo', imagen='$imagen'";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Registro fue exitoso";
        header("Location: monitorautomoviles.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Error al registrar, contacte a su proveedor";
        header("Location: monitorautomoviles.php");
        exit(0);
    }
}

?>