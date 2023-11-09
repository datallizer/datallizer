<?php
require 'dbcon.php';

if (isset($_POST['delete'])) {
    $registro_id = mysqli_real_escape_string($con, $_POST['delete']);

    $query = "DELETE FROM cotizaciones WHERE id='$registro_id'";
    $query_run = mysqli_query($con, $query);
    if ($query_run) {
        header("Location: cotizacioneseguros.php");
        $_SESSION['message'] = "Usuario eliminado exitosamente";
        exit(0);
    } else {
        header("Location: cotizacioneseguros.php");
        $_SESSION['message'] = "Error al eliminar el usuario, contácte a soporte";
        exit(0);
    }
}

if (isset($_POST['deletecliente'])) {
    $registro_id = mysqli_real_escape_string($con, $_POST['deletecliente']);

    $query = "DELETE FROM seguros WHERE email='$registro_id' ";
    $query_run = mysqli_query($con, $query);
    if ($query_run) {
        $queryuser = "DELETE FROM usuarios WHERE username='$registro_id' ";
        $queryuser_run = mysqli_query($con, $queryuser);
        if ($queryuser_run) {
            header("Location: clienteseguros.php");
            $_SESSION['message'] = "Cliente eliminado exitosamente";
            exit(0);
        } else {
            header("Location: clienteseguros.php");
            $_SESSION['message'] = "Error al eliminar el usuario del cliente, contácte a soporte";
            exit(0);
        }
    } else {
        header("Location: clienteseguros.php");
        $_SESSION['message'] = "Error al eliminar la información del cliente, contácte a soporte";
        exit(0);
    }
}

if (isset($_POST['update'])) {
    $id = mysqli_real_escape_string($con, $_POST['id']);
    $nombre = mysqli_real_escape_string($con, $_POST['nombre']);
    $apellidop = mysqli_real_escape_string($con, $_POST['apellidop']);
    $apellidom = mysqli_real_escape_string($con, $_POST['apellidom']);
    $telefono = mysqli_real_escape_string($con, $_POST['telefono']);
    $servicio = mysqli_real_escape_string($con, $_POST['servicio']);
    $detalles = mysqli_real_escape_string($con, $_POST['detalles']);
    $estatus = mysqli_real_escape_string($con, $_POST['estatus']);

    $query = "UPDATE `cotizaciones` SET `nombre` = '$nombre', `apellidop` = '$apellidop', `apellidom` = '$apellidom', `telefono` = '$telefono', `servicio` = '$servicio', `detalles` = '$detalles', `estatus` = '$estatus' WHERE `cotizaciones`.`id` = '$id'";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['message'] = "Usuario editado exitosamente";
        header("Location: cotizacioneseguros.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Error al editar el usuario, contácte a soporte";
        header("Location: cotizacioneseguros.php");
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
    $servicio = mysqli_real_escape_string($con, $_POST['servicio']);
    $detalles = mysqli_real_escape_string($con, $_POST['detalles']);

    // Encriptar la contraseña
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO usuarios SET nombre='$nombre', apellidop='$apellidop', apellidom='$apellidom', username='$username', password='$hashed_password', rol='6'";

    $query_run = mysqli_query($con, $query);
    if ($query_run) {
        $queryinfo = "INSERT INTO seguros SET username='$username', telefono='$telefono', servicio='$servicio', detalles='$detalles'";

        $queryinfo_run = mysqli_query($con, $queryinfo);
        if ($queryinfo_run) {
            $_SESSION['message'] = "Cliente creado exitosamente";
            header("Location: clienteseguros.php");
            exit(0);
        } else {
            $_SESSION['message'] = "Error al registrar cliente, contácte a soporte";
            header("Location: clienteseguros.php");
            exit(0);
        }
    } else {
        $_SESSION['message'] = "Error al registrar cliente, contácte a soporte";
        header("Location: clienteseguros.php");
        exit(0);
    }
}

if (isset($_POST['cliente'])) {
    $id = $_POST['id']; // Asegúrate de que este dato se reciba correctamente

    // Obtener los datos de la cotización
    $query = "SELECT * FROM cotizaciones WHERE id = $id"; // Asegúrate de usar la consulta SQL correcta para tu base de datos
    $result = mysqli_query($con, $query); // $conexion es tu conexión a la base de datos

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        // Insertar los datos en la tabla de usuarios
        $nombre = $row['nombre'];
        $apellidop = $row['apellidop'];
        $apellidom = $row['apellidom'];
        $password = $row['telefono'];
        $username = $row['username'];
        $telefono = $row['telefono'];
        $username = $row['username'];
        $servicio = $row['servicio'];
        $detalles = $row['detalles'];

        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $insert_query = "INSERT INTO usuarios (nombre, apellidop, apellidom, password, username, rol) VALUES ('$nombre', '$apellidop', '$apellidom', '$hashed_password', '$username','6')";

        $insert_result = mysqli_query($con, $insert_query); // Ejecutar la consulta de inserción
        if ($insert_result) {
            $info_query = "INSERT INTO seguros (telefono, username, servicio, detalles) VALUES ('$telefono', '$username', '$servicio', '$detalles')";
            $insert_seguro = mysqli_query($con, $info_query); // Ejecutar la consulta de inserción
            if ($insert_seguro) {
                $id = mysqli_real_escape_string($con, $_POST['id']);

                $query = "DELETE FROM cotizaciones WHERE id='$id' ";
                $query_run = mysqli_query($con, $query);
                $_SESSION['message'] = "Cliente creado exitosamente";
                header("Location: clienteseguros.php");
                exit(0);
            } else {
                $_SESSION['message'] = "Error al crear el usuario, contacte a soporte";
                header("Location: cotizacioneseguros.php");
                exit(0);
            }
        } else {
            $_SESSION['message'] = "Error al crear el usuario, contacte a soporte";
            header("Location: cotizacioneseguros.php");
            exit(0);
        }
    }
}

if (isset($_POST['cotizacion'])) {
    $nombre = mysqli_real_escape_string($con, $_POST['nombre']);
    $apellidop = mysqli_real_escape_string($con, $_POST['apellidop']);
    $apellidom = mysqli_real_escape_string($con, $_POST['apellidom']);
    $username = $_POST['username'];

    // Valida el correo electrónico
    if (!filter_var($username, FILTER_VALIDATE_EMAIL)) {
        echo "El correo electrónico no es válido.";
        exit(0);
    }

    $telefono = mysqli_real_escape_string($con, $_POST['telefono']);
    $servicio = mysqli_real_escape_string($con, $_POST['servicio']);
    $detalles = mysqli_real_escape_string($con, $_POST['detalles']);

    // Escapa los caracteres especiales en los datos del textarea
    $detalles = str_replace("'", "\'", $detalles);
    $detalles = str_replace("\n", "\\n", $detalles);

    $query = "INSERT INTO cotizaciones SET nombre='$nombre', apellidop='$apellidop', apellidom='$apellidom', username='$username', telefono='$telefono', servicio='$servicio', detalles='$detalles', estatus='1', identificador='1'";

    $query_run = mysqli_query($con, $query);
    if ($query_run) {
        $_SESSION['message'] = "Solicitud enviada exitosamente";
        header("Location: seguros.php#cotizacion");
        exit(0);
    } else {
        $_SESSION['message'] = "Error al crear la cotización, contácte a soporte";
        header("Location: seguros.php#cotizacion");
        exit(0);
    }
}
