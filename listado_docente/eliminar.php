<?php
$conexion = new mysqli("localhost", "root","","kevis","3306");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['accion']) && $_POST['accion'] == "eliminar" && isset($_POST['cedula'])) {
        $id = $_POST['cedula'];

        // Eliminar el registro de la base de persona
        $stmt = $conexion->prepare("DELETE FROM persona WHERE cedula = ?");
        $stmt->bind_param('i', $id);

        if ($stmt->execute()) {
            echo "persona eliminados correctamente.";
        } else {
            echo "Error al eliminar persona: " . $stmt->error;
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
