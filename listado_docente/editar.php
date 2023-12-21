<?php
$conexion = new mysqli("localhost", "root","","kevis","3306");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['accion']) && $_POST['accion'] == "editar" && isset($_POST['cedula'])) {
        $cedula = $_POST['cedula'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellidos'];

        // Actualizar el registro en la base de datos
        $stmt = $conexion->prepare("UPDATE persona SET nombre = ?, apellidos = ? WHERE cedula = ?");
        $stmt->bind_param('ssi', $cedula, $nombre, $apellido);

        if ($stmt->execute()) {
            echo "Datos editados correctamente.";
        } else {
            echo "Error al editar datos: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Solicitud incorrecta.";
    }
} else {
    echo "Método de solicitud no permitido.";
}

$conexion->close();
?>
