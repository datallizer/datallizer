<?php
session_start();
require '../dbcon.php';

if(isset($_POST['delete']))
{
    $registro_id = mysqli_real_escape_string($con, $_POST['delete']);

    $query = "DELETE FROM finanzas WHERE id='$registro_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        header("Location: finanzas.php");
        exit(0);
    }
    else
    {
        header("Location: finanzas.php");
        exit(0);
    }
}

if(isset($_POST['save']))
{
    $nombreProyecto = mysqli_real_escape_string($con, $_POST['nombreProyecto']);
    $cotizacionTotal = mysqli_real_escape_string($con, $_POST['cotizacionTotal']);
    $costoDesarrollo = mysqli_real_escape_string($con, $_POST['costoDesarrollo']);
    $dominio = mysqli_real_escape_string($con, $_POST['dominio']);
    $hosting = mysqli_real_escape_string($con, $_POST['hosting']);
    $sslCampo = mysqli_real_escape_string($con, $_POST['sslCampo']);
    $otros = mysqli_real_escape_string($con, $_POST['otros']);
    $pagoDesarrolladores = mysqli_real_escape_string($con, $_POST['pagoDesarrolladores']);
    $iva = number_format($_POST['cotizacionTotal'] * 0.16, 2); // Formatear a 2 decimales
    $fechaInicio = mysqli_real_escape_string($con, $_POST['fechaInicio']);
    $fechaTermino = mysqli_real_escape_string($con, $_POST['fechaTermino']);
    $montoPagado = mysqli_real_escape_string($con, $_POST['montoPagado']);
    $pendientePagar = mysqli_real_escape_string($con, $_POST['cotizacionTotal']-$_POST['montoPagado']);
    $gananciaFinal = mysqli_real_escape_string($con, $_POST['cotizacionTotal']-$_POST['dominio']-$_POST['otros']-$_POST['hosting']-$_POST['sslCampo']-$_POST['pagoDesarrolladores']-$_POST['iva']);

    $query = "INSERT INTO finanzas SET nombreProyecto='$nombreProyecto', cotizacionTotal='$cotizacionTotal', costoDesarrollo='$costoDesarrollo', dominio='$dominio', hosting='$hosting', sslCampo='$sslCampo', otros='$otros', 
    pagoDesarrolladores='$pagoDesarrolladores', iva='$iva', gananciaFinal='$gananciaFinal', fechaInicio='$fechaInicio', fechaTermino='$fechaTermino', montoPagado='$montoPagado', pendientePagar='$pendientePagar'";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        header("Location: finanzas.php");
        exit(0);
    }
    else
    {
        header("Location: finanzas.php");
        exit(0);
    }
}

if(isset($_POST['update']))
{
    $id = mysqli_real_escape_string($con,$_POST['id']);
    $nombreProyecto = mysqli_real_escape_string($con, $_POST['nombreProyecto']);
    $cotizacionTotal = mysqli_real_escape_string($con, $_POST['cotizacionTotal']);
    $costoDesarrollo = mysqli_real_escape_string($con, $_POST['costoDesarrollo']);
    $dominio = mysqli_real_escape_string($con, $_POST['dominio']);
    $hosting = mysqli_real_escape_string($con, $_POST['hosting']);
    $sslCampo = mysqli_real_escape_string($con, $_POST['sslCampo']);
    $otros = mysqli_real_escape_string($con, $_POST['otros']);
    $pagoDesarrolladores = mysqli_real_escape_string($con, $_POST['pagoDesarrolladores']);
    $iva = mysqli_real_escape_string($con, $_POST['iva']);
    $gananciaFinal = mysqli_real_escape_string($con, $_POST['gananciaFinal']);
    $fechaInicio = mysqli_real_escape_string($con, $_POST['fechaInicio']);
    $fechaTermino = mysqli_real_escape_string($con, $_POST['fechaTermino']);
    $montoPagado = mysqli_real_escape_string($con, $_POST['montoPagado']);
    $pendientePagar = mysqli_real_escape_string($con, $_POST['cotizacionTotal'] - $_POST['montoPagado'] );

    $sql = "UPDATE `finanzas` SET `nombreProyecto` = '$nombreProyecto', `cotizacionTotal` = '$cotizacionTotal', `costoDesarrollo` = '$costoDesarrollo', `dominio` = '$dominio', `hosting` = '$hosting', `sslCampo` = '$sslCampo', `otros` = '$otros', `pagoDesarrolladores` = '$pagoDesarrolladores', `iva` = '$iva', `gananciaFinal` = '$gananciaFinal', `fechaInicio` = '$fechaInicio', `fechaTermino` = '$fechaTermino', `montoPagado` = '$montoPagado', `pendientePagar` = '$pendientePagar' WHERE `finanzas`.`id` = $id;"; 
    $query_run = mysqli_query($con, $sql);

    if($query_run)
    {
        header("Location: finanzas.php");
        exit(0);
    }
    else
    {
        header("Location: finanzas.php");
        exit(0);
    }

}

?>