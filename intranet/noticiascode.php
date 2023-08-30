<?php
session_start();
require '../dbcon.php';

if(isset($_POST['delete']))
{
    $registro_id = mysqli_real_escape_string($con, $_POST['delete']);

    $query = "DELETE FROM noticias WHERE id='$registro_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        header("Location: dashboardnoticias.php");
        exit(0);
    }
    else
    {
        header("Location: dashboardnoticias.php");
        exit(0);
    }
}

if(isset($_POST['save']))
{
    $titulo = mysqli_real_escape_string($con, $_POST['titulo']);
    $autor = mysqli_real_escape_string($con, $_POST['autor']);
    $fecha_publicacion = mysqli_real_escape_string($con, $_POST['fecha_publicacion']);
    $cuerpo = mysqli_real_escape_string($con, $_POST['cuerpo']);
    $imagen =addslashes (file_get_contents($_FILES['imagen']['tmp_name']));

    $query = "INSERT INTO noticias SET titulo='$titulo', cuerpo='$cuerpo', imagen='$imagen', autor='$autor', fecha_publicacion='$fecha_publicacion'";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        header("Location: dashboardnoticias.php");
        exit(0);
    }
    else
    {
        header("Location: dashboardnoticias.php");
        exit(0);
    }
}

if(isset($_POST['update']))
{
    $id = mysqli_real_escape_string($con,$_POST['id']);
    $titulo = mysqli_real_escape_string($con, $_POST['titulo']);
    $autor = mysqli_real_escape_string($con, $_POST['autor']);
    $fecha_publicacion = mysqli_real_escape_string($con, $_POST['fecha_publicacion']);
    $cuerpo = mysqli_real_escape_string($con, $_POST['cuerpo']);
    

    // Verificar si se seleccionó un archivo
    if(isset($_FILES['imagen']) && $_FILES['imagen']['error'] == UPLOAD_ERR_OK)
    {
        $imagen =addslashes (file_get_contents($_FILES['imagen']['tmp_name']));
    }
    else // Si no se seleccionó un archivo, usar la imagen existente en la base de datos
    {
        $sql = "UPDATE `noticias` SET `titulo` = '$titulo', `cuerpo` = '$cuerpo', `autor` = '$autor', `fecha_publicacion` = '$fecha_publicacion' WHERE `noticias`.`id` = $id;"; 
    $query_run = mysqli_query($con, $sql);

    if($query_run)
    {
        header("Location: dashboardnoticias.php");
        exit(0);
    }
    else
    {
        header("Location: dashboardnoticias.php");
        exit(0);
    }
    }
    
    $sql = "UPDATE `noticias` SET `titulo` = '$titulo', `cuerpo` = '$cuerpo', `imagen` = '$imagen', `autor` = '$autor', `fecha_publicacion` = '$fecha_publicacion' WHERE `noticias`.`id` = $id;"; 
    $query_run = mysqli_query($con, $sql);

    if($query_run)
    {
        header("Location: dashboardnoticias.php");
        exit(0);
    }
    else
    {
        header("Location: dashboardnoticias.php");
        exit(0);
    }
}


?>