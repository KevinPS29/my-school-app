<!-- login.php -->
<?php
session_start();


// Verifica las credenciales (simulado, reemplázalo con tu lógica de autenticación real)
$usuarioValido = "kperez";
$contrasenaValida = "hola";

if (!empty($_POST["btningresar"])){

if ($_POST["usuario"] == $usuarioValido && $_POST["contrasena"] == $contrasenaValida) {
    // Credenciales válidas, inicia la sesión
    $_SESSION["usuario"] = $_POST["usuario"];
    header("location:iniciosesion.php");
    exit();
} else {
    // Credenciales inválidas, redirige al formulario de inicio de sesión
    header("location:iniciosesion.php");
    exit();
}
}

if (isset($_SESSION['usuario'])) {
    header('Location: iniciosesion.php');
    exit();
}
?>