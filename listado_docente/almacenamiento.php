<?php
$conexion1 = new mysqli("localhost", "root","","kevis","3306");

if ($conexion1->connect_error) {
    die("Error de conexión: " . $conexion1->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cedula = $_POST['cedula'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];

    $stmt = $conexion1->prepare("INSERT INTO persona (cedula, nombre, apellido, direccion, telefono, email) VALUES (?,?,?,?,?,?)");

    $stmt->bind_param('isssis',$cedula, $nombre, $apellido, $direccion, $telefono, $email);


    if ($stmt->execute()) {
        header("location:/my_school_app/lista_administrativo/lista_admin.php");
    } else {
        echo "Error al guardar datos: " . $stmt->error;
    }

    $stmt->close();
}

$conexion1->close();
?>