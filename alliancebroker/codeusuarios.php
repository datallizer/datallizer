<?php
require 'dbcon.php';

if (isset($_POST['delete'])) {
    $registro_id = mysqli_real_escape_string($con, $_POST['delete']);

    // Buscar el rol del usuario
    $query = "SELECT rol FROM usuarios WHERE username='$registro_id'";
    $result = mysqli_query($con, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $registro = mysqli_fetch_assoc($result);
        $rol = $registro['rol'];

        // Eliminar el usuario según el rol
        if ($rol == 6) {
            $deleteQuery = "DELETE FROM usuarios WHERE username='$registro_id'";
            $deleteQuery2 = "DELETE FROM seguros WHERE username='$registro_id'";
        } elseif ($rol == 7) {
            $deleteQuery = "DELETE FROM usuarios WHERE username='$registro_id'";
            $deleteQuery2 = "DELETE FROM litigio WHERE username='$registro_id'";
        } else {
            $_SESSION['message'] = "Error al eliminar el usuario, contácte a soporte";
            header("Location: monitorusuarios.php");
            exit(0);
        }

        $query_run = mysqli_query($con, $deleteQuery);

        if ($query_run) {
            if (isset($deleteQuery2)) {
                $query_run2 = mysqli_query($con, $deleteQuery2);
                if ($query_run2) {
                    $_SESSION['message'] = "Usuario eliminado exitosamente";
                    header("Location: monitorusuarios.php");
                    exit(0);
                }
            } else {
                $_SESSION['message'] = "Usuario eliminado exitosamente";
                header("Location: monitorusuarios.php");
                exit(0);
            }
        } else {
            $_SESSION['message'] = "Error al eliminar el usuario, contácte a soporte";
            header("Location: monitorusuarios.php");
            exit(0);
        }
    } else {
        $_SESSION['message'] = "Usuario no encontrado";
        header("Location: monitorusuarios.php");
        exit(0);
    }
}


if (isset($_POST['update'])) {
    // Obtener valores del formulario
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $nombre = mysqli_real_escape_string($con, $_POST['nombre']);
    $apellidop = mysqli_real_escape_string($con, $_POST['apellidop']);
    $apellidom = mysqli_real_escape_string($con, $_POST['apellidom']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $rol = mysqli_real_escape_string($con, $_POST['rol']);
    $previousRole = $rol;

    // Encriptar la nueva contraseña
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Actualizar el usuario en la tabla usuarios
    $query = "UPDATE `usuarios` SET `nombre` = '$nombre', `apellidop` = '$apellidop', `apellidom` = '$apellidom', `password` = '$hashed_password', `rol` = '$rol' WHERE `username` = '$username'";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $rolQuery = "SELECT rol FROM usuarios WHERE `username` = '$username'";
        $rolResult = mysqli_query($con, $rolQuery);
        if ($rolResult) {
            $row = mysqli_fetch_assoc($rolResult);
            $userRole = $row['rol']; // Valor del rol obtenido desde la fila
            echo $userRole; // Esto mostrará el valor del rol
        } else {
            echo "Error al ejecutar la consulta";
        }

        switch ($previousRole) {
            case 6: // Si el rol previo es 6
                echo "<p>En el caso viejo 6</p>";
                if ($userRole == 7) {
                    echo "<p>Nuevo 7</p>";
                    // Transferir campos específicos de 'seguros' a 'litigio'
                    $transferQuery = "INSERT INTO litigio (email, telefono, servicio, detalles, fechanacimiento)
                                      SELECT email, telefono, servicio, detalles, fechanacimiento 
                                      FROM seguros WHERE email = (SELECT username FROM usuarios WHERE `username` = '$username')";
                    $transfer_run = mysqli_query($con, $transferQuery);

                    if ($transfer_run) {
                        // Eliminar datos de 'seguros' relacionados con el usuario
                        $deleteQuery = "DELETE FROM seguros WHERE email = (SELECT username FROM usuarios WHERE `username` = '$username')";
                        mysqli_query($con, $deleteQuery);
                    }
                } elseif ($userRole == 5) {
                    echo "<p>Nuevo 5</p>";
                    // Copiar campos específicos de 'seguros' a 'litigio'
                    $copyQuery = "INSERT INTO litigio (email, telefono, servicio, detalles, fechanacimiento)
                                  SELECT email, telefono, servicio, detalles, fechanacimiento 
                                  FROM seguros WHERE email = (SELECT username FROM usuarios WHERE `username` = '$username')";
                    mysqli_query($con, $copyQuery);
                }
                break;

            case 7: // Si el rol previo es 7
                echo "<p>En el caso viejo 7</p>";
                if ($userRole == 6) {
                    echo "<p>Nuevo 6</p>";
                    // Transferir campos específicos de 'litigio' a 'seguros'
                    $transferQuery = "INSERT INTO seguros (email, telefono, servicio, detalles, fechanacimiento)
                                      SELECT email, telefono, servicio, detalles, fechanacimiento 
                                      FROM litigio WHERE email = (SELECT username FROM usuarios WHERE `username` = '$username')";
                    $transfer_run = mysqli_query($con, $transferQuery);

                    if ($transfer_run) {
                        // Eliminar datos de 'litigio' relacionados con el usuario
                        $deleteQuery = "DELETE FROM litigio WHERE email = (SELECT username FROM usuarios WHERE `username` = '$username')";
                        mysqli_query($con, $deleteQuery);
                    }
                } elseif ($userRole == 5) {
                    echo "<p>Nuevo 5</p>";
                    // Copiar campos específicos de 'litigio' a 'seguros'
                    $copyQuery = "INSERT INTO seguros (email, telefono, servicio, detalles, fechanacimiento)
                                  SELECT email, telefono, servicio, detalles, fechanacimiento 
                                  FROM litigio WHERE email = (SELECT username FROM usuarios WHERE `username` = '$username')";
                    mysqli_query($con, $copyQuery);
                }
                break;

            case 5: // Si el rol previo es 5
                echo "<p>En el caso viejo 5</p>";
                if ($userRole == 6) {
                    echo "<p>Nuevo 6</p>";
                    // Eliminar datos de 'litigio' relacionados con el usuario
                    $deleteQuery = "DELETE FROM litigio WHERE email = (SELECT username FROM usuarios WHERE `username` = '$username')";
                    mysqli_query($con, $deleteQuery);
                } elseif ($userRole == 7) {
                    echo "<p>Nuevo 7</p>";
                    // Eliminar datos de 'seguros' relacionados con el usuario
                    $deleteQuery = "DELETE FROM seguros WHERE email = (SELECT username FROM usuarios WHERE `username` = '$username')";
                    mysqli_query($con, $deleteQuery);
                }
                break;
        }


        // Redireccionar a la página después de realizar los cambios
        $_SESSION['message'] = "Usuario editado exitosamente";
        header("Location: monitorusuarios.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Error al editar el usuario, contácte a soporte";
        header("Location: monitorusuarios.php");
        exit(0);
    }
}


if (isset($_POST['save'])) {
    $nombre = mysqli_real_escape_string($con, $_POST['nombre']);
    $apellidop = mysqli_real_escape_string($con, $_POST['apellidop']);
    $apellidom = mysqli_real_escape_string($con, $_POST['apellidom']);
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $rol = mysqli_real_escape_string($con, $_POST['rol']);

    // Encriptar la contraseña
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO usuarios SET nombre='$nombre', apellidop='$apellidop', apellidom='$apellidom', username='$username', password='$hashed_password', rol='$rol'";

    $query_run = mysqli_query($con, $query);
    if ($query_run) {
        $_SESSION['message'] = "Usuario creado exitosamente";
        header("Location: monitorusuarios.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Error al crear el usuario, contácte a soporte";
        header("Location: monitorusuarios.php");
        exit(0);
    }
}

if (isset($_POST['saveseguro'])) {
    $nombre = mysqli_real_escape_string($con, $_POST['nombre']);
    $apellidop = mysqli_real_escape_string($con, $_POST['apellidop']);
    $apellidom = mysqli_real_escape_string($con, $_POST['apellidom']);
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $email = mysqli_real_escape_string($con, $_POST['username']);
    $telefono = mysqli_real_escape_string($con, $_POST['password']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $rol = mysqli_real_escape_string($con, $_POST['rol']);
    $servicio = mysqli_real_escape_string($con, $_POST['servicio']);
    $detalles = mysqli_real_escape_string($con, $_POST['detalles']);

    // Encriptar la contraseña
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO usuarios SET nombre='$nombre', apellidop='$apellidop', apellidom='$apellidom', username='$username', password='$hashed_password', rol='$rol'";

    $query_run = mysqli_query($con, $query);
    if ($query_run) {
        $queryinfo = "INSERT INTO seguros SET email='$email', telefono='$telefono', servicio='$servicio', detalles='$detalles'";

        $queryinfo_run = mysqli_query($con, $queryinfo);
        if ($queryinfo_run) {
            $_SESSION['message'] = "Cliente creado exitosamente";
            header("Location: clienteseguros.php");
            exit(0);
        } else {
            $_SESSION['message'] = "Error al registrar cliente, contácte a soporte";
            header("Location: monitorusuarios.php");
            exit(0);
        }
    } else {
        $_SESSION['message'] = "Error al registrar cliente, contácte a soporte";
        header("Location: monitorusuarios.php");
        exit(0);
    }
}

if (isset($_POST['savelitigio'])) {
    $nombre = mysqli_real_escape_string($con, $_POST['nombre']);
    $apellidop = mysqli_real_escape_string($con, $_POST['apellidop']);
    $apellidom = mysqli_real_escape_string($con, $_POST['apellidom']);
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $email = mysqli_real_escape_string($con, $_POST['username']);
    $telefono = mysqli_real_escape_string($con, $_POST['password']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $rol = mysqli_real_escape_string($con, $_POST['rol']);
    $servicio = mysqli_real_escape_string($con, $_POST['servicio']);
    $detalles = mysqli_real_escape_string($con, $_POST['detalles']);

    // Encriptar la contraseña
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO usuarios SET nombre='$nombre', apellidop='$apellidop', apellidom='$apellidom', username='$username', password='$hashed_password', rol='$rol'";

    $query_run = mysqli_query($con, $query);
    if ($query_run) {
        $queryinfo = "INSERT INTO litigio SET email='$email', telefono='$telefono', servicio='$servicio', detalles='$detalles'";

        $queryinfo_run = mysqli_query($con, $queryinfo);
        if ($queryinfo_run) {
            $_SESSION['message'] = "Cliente creado exitosamente";
            header("Location: clienteslitigio.php");
            exit(0);
        } else {
            $_SESSION['message'] = "Error al registrar cliente, contácte a soporte";
            header("Location: monitorusuarios.php");
            exit(0);
        }
    } else {
        $_SESSION['message'] = "Error al registrar cliente, contácte a soporte";
        header("Location: monitorusuarios.php");
        exit(0);
    }
}

if (isset($_POST['saveglobal'])) {
    $nombre = mysqli_real_escape_string($con, $_POST['nombre']);
    $apellidop = mysqli_real_escape_string($con, $_POST['apellidop']);
    $apellidom = mysqli_real_escape_string($con, $_POST['apellidom']);
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $email = mysqli_real_escape_string($con, $_POST['username']);
    $telefono = mysqli_real_escape_string($con, $_POST['password']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $rol = mysqli_real_escape_string($con, $_POST['rol']);
    $servicio = mysqli_real_escape_string($con, $_POST['servicio']);
    $detalles = mysqli_real_escape_string($con, $_POST['detalles']);

    // Encriptar la contraseña
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO usuarios SET nombre='$nombre', apellidop='$apellidop', apellidom='$apellidom', username='$username', password='$hashed_password', rol='$rol'";

    $query_run = mysqli_query($con, $query);
    if ($query_run) {
        $queryinfo = "INSERT INTO litigio SET email='$email', telefono='$telefono', servicio='$servicio', detalles='$detalles'";

        $queryinfo_run = mysqli_query($con, $queryinfo);
        if ($queryinfo_run) {
            $_SESSION['message'] = "Cliente creado exitosamente";
            header("Location: clienteslitigio.php");
            exit(0);
        } else {
            $_SESSION['message'] = "Error al registrar cliente, contácte a soporte";
            header("Location: clientesglobales.php");
            exit(0);
        }
    } else {
        $_SESSION['message'] = "Error al registrar cliente, contácte a soporte";
        header("Location: clientesglobales.php");
        exit(0);
    }
}
