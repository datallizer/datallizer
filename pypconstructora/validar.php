<?php
session_start();

$user = $_POST['user'];
$password = $_POST['pass'];

require_once 'dbcon.php';
$consulta = mysqli_query ($con, "SELECT * FROM usuarios WHERE user = '$user' AND pass = '$password'");  

if(!$consulta){ 
    echo mysqli_error($mysqli);
    exit;
} 


if($user = mysqli_fetch_assoc($consulta)) {
    $_SESSION["user"] = $user;
    header("Location: nuevacasa.php");
} else {
    header("Location: login.php");
}


?>

