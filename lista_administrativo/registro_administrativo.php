<?php
session_start();

// Verifica si el usuario ha iniciado sesión
if (!isset($_SESSION["usuario"])) {
    // Usuario no autenticado, redirige al formulario de inicio de sesión
    header("Location: ../inicio_sesion/index.php");
    exit();
}

// Cerrar sesión cuando se hace clic en el boton cerrar sesion
if (isset($_GET["cerrar_sesion"])) {
    session_unset();
    session_destroy();
    header('Location: ../inicio_sesion/index.php');
    exit();
}
    $servidor="localhost";
    $usuario="root";
    $clave="";
    $baseDeDatos="kevis";
    $conexion = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);
    if(!$conexion){
        echo"Error en la conexion con el servidor";
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../registro/registro.css" type="text/css" />
</head>
  <body class="container" >
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <div class="loader"></div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <!-- funcion para el cargue de la pagina -->
    <script type="text/javascript">
        $(window).load(function() {
            $(".loader").fadeOut("slow");
        });
        </script>
        <!--borde superior de la pagina-->
    <div class="bordesuperior">
        <div>
               <a href="../interfaz_administrativa/interfazadmin.php">
                <img  class="logo" src="../iconos/imagenes/escudo3.jpeg" width="80">
               </a>
        </div>
        <div class="bordesuperior">
            <a class="hover" href="../listado_docente/listado_docente.php">Docente</a>
            <a class="hover" href="../listado_estudiante/listado_estudiante.php">Estudiante</a>
            <a class="hover" href="../lista_asignaturas/lista_asignaturas.php">Asignaturas</a>
            <a class="hover" href="../lista_administrativo/lista_admin.php">Administrativos</a>
            <a class="hover" href="../soporte/soporte.php">Soporte</a>
            <a class="hover" class="usuario"><?php echo $_SESSION["usuario"]; ?></a>
            <div class="Dropdown">
                <img class="configuracion" src="../iconos/imagenes/configuracion.jpeg" width="40">
                <div class="Dropdown-content">
                    <a href="#">Ver perfil</a>
                    <a href="?cerrar_sesion">Cerrar sesión</a>
                </div>
            </div>
        </div>
    </div>

    <!--inicio de los formularios-->
        <!--agregar datos-->
        <h1 class="registro">Agregar nuevo administrativo</h1>
            <br>
            <form id="formulario" method="POST" action="almacenamiento.php">
                <div class="grid">
                    <!--dentro de cada label ingresamos los input para que las cajas queden dentro de la misma celda de las grillas-->
                    <div class="ladoIz">
                            <label for="CEDULA" class="FIL1">CEDULA:</label>
                            <br><input placeholder="CEDULA" class="form CEDULA" type="number" id="cedula"
                            name="cedula" />
                    </div>
                    <div class="ladoDr">
                        <label for="nombre" class="FIL1">NOMBRES:</label>
                        <br><input placeholder="nombre" class="form NOMBRES" type="text" id="nombre"
                            name="nombre" required />
                    </div>
                    <div class="ladoIz">
                        <label for="APELLIDOS">APELLIDOS:</label>
                        <br><input placeholder="apellidos" class="form APELLIDOS" type="text" id="apellidos"
                            name="apellido" required />
                    </div>
                    <div class="ladoDr">
                        <label for="direccion">DIRECCION:</label>
                        <br><input placeholder="direccion" class="form direccion" type="text" id="direccion"
                            name="direccion" />
                    </div>
                    <div class="ladoIz">
                        <label for="TELEFONO" class="FIL1 TELEFONO">TELEFONO:</label>
                        <br><input placeholder="telefono" class="form telefono" type="number" id="telefono" name="telefono" />
                    </div>
                    <div class="ladoDr">
                        <label for="EMAIL">E-MAIL:</label>
                        <br><input placeholder="email" class="form email" type="email" id="email"
                            name="email" />
                    </div>
                </div>
                <br>
                <div class="d-grid gap-2 col-2 mx-auto">
                    <button class="btn btn-primary" type="submit" >Registrar</button>
                </div>
            </form>
    
  <footer>
        <img class=" schoolapp" src="../iconos/imagenes/my_scholl_app.jpeg" width="60" />
                    <p class="copy">Copyright 2023</p>
                    </footer>
  </body>
</html>


