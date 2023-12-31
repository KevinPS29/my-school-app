<!-- pagina_protegida que debe ingresar con la clave y contraseña-->
<?php
session_start();

// Verifica si el usuario ha iniciado sesión
if (!isset($_SESSION["usuario"])) {
    // Usuario no autenticado, redirige al formulario de inicio de sesión
    header("Location: index.php");
    exit();
}

// Cerrar sesión cuando se hace clic en el boton cerrar sesion
if (isset($_GET["cerrar_sesion"])) {
    session_unset();
    session_destroy();
    header('Location: index.php');
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
    <link rel="stylesheet" href="../INTERFAZ ADMINISTRATIVA/interfaz_admin.css" type="text/css" />
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
        <!--borde superior de la pagina-->
    <div class="bordesuperior">
        <div>
            <img class="logo" src="../ESCUDO3.jpeg" width="80">
        </div>
        <div class="bordesuperior">
            <a class="hover" href="../ASIGNATURA/asignatura.html">Asignaturas</a>
            <a class="hover" href="../CALIFICACIONES/index.html">Calificaciones</a>
            <a class="hover" href="usuario.html" class="usuario"><?php echo $_SESSION["usuario"]; ?></a>
            <div class="Dropdown">
                <img class="configuracion" src="../CONFIGURACION.jpeg" width="40">
                <div class="Dropdown-content">
                    <a href="#">Ver perfil</a>
                    <a href="#">configuración</a>
                    <a href="?cerrar_sesion">Cerrar sesión</a>
                </div>
            </div>
        </div>
    </div>
    <!--informacion del rol del usuario-->
    <div class="Informacion">
        <div>
            <h5 href="usuario1.html" class="Actividades badge bg-primary text-wrap">Administrador</h5>
        </div>
        <div>
            <h6 href="usuario.html" class="Actividades badge bg-primary text-wrap nombre_de_usuario">Nombre de Usuario</h6>
        </div>
    </div>
        <!-- tabla de gestion principal -->
    <div class="grid_1">
        <table class="gestion_principal">
            <tr>
                <th class="titulo tabla1">Gestion Principal</th>
            </tr>
            <tr class="contenido tabla1">
                <th class="th"> <button onclick="window.location.href='/MY SCHOOL APP/INICIO SESION FUNCIONAL/lista_docentes.php'" class="btn_tabla1"><img class="configuracion persona" src="../ICONOS/PERSONA.png" width="20"> Gestion Docente</button></th>
            </tr>
            <tr class="contenido tabla1">
                <th class="th"><button onclick="window.location.href='/MY SCHOOL APP/INICIO SESION FUNCIONAL/lista_estudiante.php'" class="btn_tabla1"> <img class="configuracion persona" src="../ICONOS/PERSONA.png" width="20"> Gestion Estudiante</button></th>
            </tr>
            <tr class="contenido tabla1">
                <th class="th"><button onclick="window.location.href='/MY SCHOOL APP/INICIO SESION FUNCIONAL/lista_asignaturas.php'" class="btn_tabla1"><img class="configuracion persona" src="../ICONOS/PERSONA.png" width="20">Gestion Asignatura</button></th>
            </tr>
            <tr class="contenido tabla1">
                <th class="th" ><button  onclick="window.location.href='/MY SCHOOL APP/INICIO SESION FUNCIONAL/lista_admin.php'" class="btn_tabla1"><img class="configuracion persona" src="../ICONOS/PERSONA.png" width="20">Gestion Administrativos</button></th>
            </tr>
        </table>
        <!--tabla de gestion institucion-->
        <table class="gestion_institucion">
            <tr>
                <th  class="titulo tabla2">Institucion Educativa Javier Cortes</th>
            </tr>
            <tr>
                <td class="grid_2" >
                    <div>
                        <img class="logo2" src="../ESCUDO3.jpeg" width="200">
                    </div>                    
                    <div class="datosinstitucion">
                        <p class="pf1"><b>Institucion educativa</b> <br>
                            <b>Calendario</b>: A <br>
                            <b>Zona</b>: Urbana<br>
                            <b>Sector</b>: Privado<br>
                            <b>Género</b>: Mixto<br>
                            <b>Carácter</b>: Academico<br>
                            <b>Jornada</b>: Mañana<br>
                        </p>
                        <p class="pf2">
                            <b>Secundaria:</b> <br>
                            Grado Sexto <br>
                            Grado Septimo <br>
                            Grado Octavo <br>
                            Grado Noveno <br>
                            Grado Decimo <br>
                            Grado Undecimo <br>
                        </p>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <div>
    </div>
    <!--borde inferior-->  
    <footer class="bordeinferior">
        <img class="schoolapp" src="../MY SCHOOL APP.jpeg" width="60" />
        <p>Copyright 2023</p>
</footer>
<script src="admin.js"></script>
    </body>
</html>