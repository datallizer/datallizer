<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_student']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['delete_student']);

    $query = "DELETE FROM casa WHERE id='$student_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        
        header("Location: monitorcasas.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Deleted";
        header("Location: monitorcasas.php");
        exit(0);
    }
}

if(isset($_POST['save_student']))
{
    $titulo = mysqli_real_escape_string($con, $_POST['titulo']);
    $descripcion = mysqli_real_escape_string($con, $_POST['descripcion']);
    $costo = mysqli_real_escape_string($con, $_POST['costo']);
    $tipo = mysqli_real_escape_string($con, $_POST['tipo']);
    $imagen =addslashes (file_get_contents($_FILES['imagen']['tmp_name']));
    $imagendos =addslashes (file_get_contents($_FILES['imagendos']['tmp_name']));

    $query = "INSERT INTO casa SET titulo='$titulo', descripcion='$descripcion', costo='$costo', tipo='$tipo', imagen='$imagen'";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        header("Location: nuevacasa.php");
        exit(0);
    }
    else
    {
        header("Location: nuevacasa.php");
        exit(0);
    }
}

?>