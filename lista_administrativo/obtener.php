<?php
$conexion = new mysqli("localhost", "root","","kevis","3306");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Obtener persona de la base de persona
$resultado = $conexion->query("SELECT * FROM persona");

if ($resultado->num_rows > 0) {
    // Crear un array para almacenar los resultados
    $persona = array();

    // Obtener cada fila de resultados y agregarla al array
    while ($fila = $resultado->fetch_assoc()) {
        $persona[] = $fila;
    }

    // Enviar los persona como JSON al cliente
    echo json_encode($persona);
} else {
    echo "No hay persona en la base de persona.";
}

$conexion->close();
?>
