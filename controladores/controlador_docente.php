<?php

session_start();

/* proceso para inicio de sesion con el usuario y contraseña*/
if (!empty($_POST["btningresar-docente"])){
    if (empty($_POST["usuario"]) and empty($_POST["contrasena"])) {
        echo '<div class="alert alert-danger">Los campos estan vacios</div>';
        header("location:../inicio_sesion_docente/index.php");
        exit();
    } else {
        $usuario=$_POST["usuario"];
        $clave=$_POST["contrasena"];
        $sql=$conexion->query(" select * from persona where nombre='$usuario' and cedula='$clave' ");
        if ($datos=$sql->fetch_object()) {
            $_SESSION["usuario"] = $_POST["usuario"];
            header("location:../interfaz_docente/interfazdocente.php");
            exit();

        } else {
            echo '<div class="alert alert-danger">Acceso denegado</div>'; 
        }

    }    
}

/*cerrar sesion  */
if (isset($_SESSION['usuario'])) {
    header("Location:../interfaz_docente/interfazdocente.php");
    exit();
}


?>