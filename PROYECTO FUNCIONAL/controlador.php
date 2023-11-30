<?php

session_start();

/* proceso para inicio de sesion con el usuario y contraseña*/
if (!empty($_POST["btningresar"])){
    if (empty($_POST["usuario"]) and empty($_POST["contrasena"])) {
        echo '<div class="alert alert-danger">Los campos estan vacios</div>';
        header("location:index.php");
        exit();
    } else {
        $usuario=$_POST["usuario"];
        $clave=$_POST["contrasena"];
        $sql=$conexion->query(" select * from usuario where usuario='$usuario' and clave='$clave' ");
        if ($datos=$sql->fetch_object()) {
            $_SESSION["usuario"] = $_POST["usuario"];
            header("location:interfazadmin.php");
            exit();

        } else {
            echo '<div class="alert alert-danger">Acceso denegado</div>'; 
        }

    }    
}

/*cerrar sesion  */
if (isset($_SESSION['usuario'])) {
    header("Location: interfazadmin.php");
    exit();
}
?>

