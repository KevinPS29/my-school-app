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
    
?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inicio</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../lista_asignaturas/lista_asignaturas.css" type="text/css" />
</head>
        <body class="container">
    <div class="loader"></div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <!-- funcion para el cargue de la pagina -->
    <script type="text/javascript">
        $(window).load(function() {
            $(".loader").fadeOut("slow");
        });
        </script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <div class="bordesuperior">
        <div>
               <a href="../interfaz_administrativa/interfazadmin.php">
                <img  class="logo" src="../iconos/imagenes/escudo3.jpeg" width="80">
               </a>
        </div>
        <div class="bordesuperior">
            <a class="hover" href="../listado_docente/listado_docente.php">Docente</a>
            <a class="hover" href="../listado_estudiante/listado_estudiante.php">Estudiante</a>
            <a class="hover" href="../lista_administrativo/lista_admin.php">Administrativos</a>
            <a class="hover" href="../soporte/soporte.php">Soporte</a>
            <a class="hover"  class="usuario"><?php echo $_SESSION["usuario"]; ?></a>
            <div class="Dropdown">
                <img class="configuracion" src="../iconos/imagenes/configuracion.jpeg" width="40">
                <div class="Dropdown-content">
                    <a href="#">Ver perfil</a>
                    <a href="?cerrar_sesion">Cerrar sesión</a>
                </div>
            </div>
        </div>
    </div>
    <div class="Informacion">
        <div>
            <h5 href="usuario.html" class="Actividades badge bg-primary text-wrap">Asignaturas</h5>
        </div>
        <div>
            <h1>Intitución Educativa Javier Cortés</h1>
        </div>
        <div>
            <h6 href="usuario.html" class="Actividades badge bg-primary text-wrap nombre_de_usuario">Nombre de Usuario</h6>
        </div>
    </div>
    <div class="grid">
        <div class="columna">
        <div class="fila">
        <img src="../iconos/imagenes/libro.jpeg" class="calificaciones mx-auto p-2" width="100">
        <button type="button" class="btn btn-primary fw-medium">Asignatura 1</button>
        </div>
        <div class="fila">
        <img src="../iconos/imagenes/libro.jpeg" class="calificaciones mx-auto p-2" width="100">
        <button type="button" class="btn btn-primary fw-medium">Asignatura 4</button>
        </div>
        </div>
        <div class="columna">
            <div class="fila ">
                <img src="../iconos/imagenes/libro.jpeg" class="calificaciones mx-auto p-2" width="100">
                <button type="button" class="btn btn-primary fw-medium">Asignatura 2</button>
            </div>
            <div class="fila">
                <img src="../iconos/imagenes/libro.jpeg" class="calificaciones mx-auto p-2" width="100">
                <button type="button" class="btn btn-primary fw-medium">Asignatura 5</button>
            </div>
        </div>
        <div class="columna">
            <div class="fila ">
                <img src="../iconos/imagenes/libro.jpeg" class="calificaciones mx-auto p-2" width="100">
                <button type="button" class="btn btn-primary fw-medium">Asignatura 3</button>
            </div>
            <div class="fila">
                <img src="../iconos/imagenes/libro.jpeg" class="calificaciones mx-auto p-2" width="100">
                <button type="button" class="btn btn-primary fw-medium">Asignatura 6</button>
            </div>
        </div>
    </div>
    <footer>
        <img class="schoolapp" src="../iconos/imagenes/my_scholl_app.jpeg" width="60" />
        <p>Copyright 2023</p>
    </footer>
    
    </body>
</html>

