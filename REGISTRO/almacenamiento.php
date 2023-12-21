<?php
$conexion = new mysqli("localhost", "root","","kevis","3306");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cedula = $_POST['cedula'];
    $nombre = $_POST['nombre'];

    $stmt = $conexion->prepare("INSERT INTO persona (cedula, nombre) VALUES (?,?)");

    $stmt->bind_param('is',$cedula, $nombre);


    if ($stmt->execute()) {
        echo "Datos guardados correctamente.";
    } else {
        echo "Error al guardar datos: " . $stmt->error;
    }

    $stmt->close();
}

$conexion->close();
?>