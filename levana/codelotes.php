<?php
session_start();
require 'dbcon.php';

if(isset($_POST['update']))
{
    $id = mysqli_real_escape_string($con,$_POST['id']);
    $estatus = isset($_POST['estatus']) ? 1 : 0;
    $lvnPM2 = mysqli_real_escape_string($con, $_POST['lvnPM2']);
    $lvnP18 = mysqli_real_escape_string($con, $_POST['lvnP18']);

    $query = "UPDATE `lotes` SET `estatus` = '$estatus', `lvnPM2` = '$lvnPM2', `lvnP18` = '$lvnP18' WHERE `lotes`.`id` = '$id'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Lote actualizado";
        header("Location: lotes.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Error, contacte a su desarrollador TI";
        header("Location: lotes.php");
        exit(0);
    }
}

if(isset($_POST['updatedos']))
{
    $id = mysqli_real_escape_string($con,$_POST['id']);
    $estatus = isset($_POST['estatus']) ? 1 : 0;
    $lvnPM2 = mysqli_real_escape_string($con, $_POST['lvnPM2']);
    $lvnP18 = mysqli_real_escape_string($con, $_POST['lvnP18']);

    $query = "UPDATE `lotesvia` SET `estatus` = '$estatus', `lvnPM2` = '$lvnPM2', `lvnP18` = '$lvnP18' WHERE `lotesvia`.`id` = '$id'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Lote actualizado";
        header("Location: lotesoriente.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Error, contacte a su desarrollador TI";
        header("Location: lotesoriente.php");
        exit(0);
    }
}
?>
