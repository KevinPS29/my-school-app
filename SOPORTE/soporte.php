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
    <link rel="stylesheet" href="soporte.css">
    <!--bootstrap-->
      <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    />
    <title>Inicio</title>
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
    <div class="bordesuperior">
        <div>
               <a href="../interfaz_administrativa/interfazadmin.php">
                <img  class="logo" src="../iconos/imagenes/escudo3.jpeg" width="80">
               </a>
        </div>
        <div class="bordesuperior">
             
            <a class="hover" href="../lista_docente/lista_docentes.php">Docente</a>
            <a class="hover" href="../lista_estudiante/lista_estudiante.php">Estudiante</a>
            <a class="hover" href="../lista_asignaturas/lista_asignaturas.php">Asignaturas</a>
            <a class="hover" href="../lista_administrativo/lista_admin.php">Administrativos</a>
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

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="well well-sm">
                    <form class="form-horizontal" method="post">
                        <div>
                            <legend class="header">Contactate con nosotros</legend>
    
                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                                <div class="col-md-8">
                                    <input id="fname" name="name" type="text" placeholder="Nombres" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                                <div class="col-md-8">
                                    <input id="lname" name="name" type="text" placeholder="Apellidos" class="form-control">
                                </div>
                            </div>
    
                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                                <div class="col-md-8">
                                    <input id="email" name="email" type="text" placeholder="Correo electronico" class="form-control">
                                </div>
                            </div>
    
                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon"></i></span>
                                <div class="col-md-8">
                                    <input id="phone" name="phone" type="text" placeholder="Numero de telefono" class="form-control">
                                </div>
                            </div>
    
                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                                <div class="col-md-8" >
                                    <textarea class="form-control" id="message" name="message" placeholder="Introduzca aquí su masaje para nosotros. Nos comunicaremos con usted dentro de 2 días hábiles." rows="6"></textarea>
                                </div>
                            </div>
    
                            <div class="form-group">
                                <div class="col-md-12 ">
                                    <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <img class=" schoolapp" src="../iconos/imagenes/my_scholl_app.jpeg" width="60" />
                    <p class="copy">Copyright 2023</p>
                    </footer>
                    <!--bootstrap-->
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
