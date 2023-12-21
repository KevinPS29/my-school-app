<?php
$conexion = new mysqli("localhost", "root","","kevis","3306");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];


    $stmt = $conexion->prepare("INSERT INTO persona (cedula, nombre, apellido, direccion, telefono, email) VALUES (?,?,?,?,?,?)");
    $stmt->bind_param('isssis',$cedula, $nombre, $apellido, $direccion, $telefono, $email);

    if ($stmt->execute()) {
        echo "persona guardados correctamente.";
    } else {
        echo "Error al guardar persona: " . $stmt->error;
    }

    $stmt->close();
}

$conexion->close();
?>
