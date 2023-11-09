<?php
    session_start();
    $correcto = "levana";
$pscorrecto = "soylevana1";

$user = $_POST["user"];
$pass = $_POST["pass"];


if ($user === $correcto && $pass === $pscorrecto) {
    # Significa que coinciden, así que vamos a guardar algo
    # en el arreglo superglobal $_SESSION, ya que ese arreglo
    # "persiste" a través de todas las páginas
    # Iniciar sesión para poder usar el arreglo
    session_start();
    # Y guardar un valor que nos pueda decir si el usuario
    # ya ha iniciado sesión o no. En este caso es el nombre
    # de usuario
    $_SESSION["user"] = $user;
    # Luego redireccionamos a la página "Secreta"
    header("Location: lotes.php");
} else {
    # No coinciden, así que simplemente imprimimos un
    # mensaje diciendo que es incorrecto
    header("Location: index.php");
}
         ?>