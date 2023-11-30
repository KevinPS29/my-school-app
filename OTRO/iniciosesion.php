<!-- pagina_protegida.php -->
<?php
session_start();

// Verifica si el usuario ha iniciado sesión
if (!isset($_SESSION["usuario"])) {
    // Usuario no autenticado, redirige al formulario de inicio de sesión
    header("Location: login.html");
    exit();
}

// Cerrar sesión cuando se hace clic en el enlace
if (isset($_GET['cerrar_sesion'])) {
    session_unset();
    session_destroy();
    header('Location: login.php');
    exit();
}

?>



<!DOCTYPE html>
<html>
<head>
    <title>Página Protegida</title>
</head>
<body>
    <h2>Bienvenido, <?php echo $_SESSION['usuario']; ?></h2>
    <p>Contenido protegido...</p>
    <br>
    <a href="?cerrar_sesion">Cerrar Sesión</a>

</body>
</html>
