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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../listado_docente/listado_docente.css">
    <!--bootstrap-->
      <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    />
    <!--Data table-->
    <link
      type="text/css"
      href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css"
      rel="stylesheet"
    />
    <link
      type="text/css"
      href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.bootstrap5.min.css"
      rel="stylesheet"
    />
    <!--font awesome-->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
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
    <!--borde superior-->
    <div class="bordesuperior">
        <div>
               <a href="../interfaz_administrativa/interfazadmin.php">
                <img  class="logo" src="../iconos/imagenes/escudo3.jpeg" width="80">
               </a>
        </div>
        <div class="bordesuperior">
            <a class="hover" href="../listado_estudiante/listado_estudiante.php">Estudiante</a>
            <a class="hover" href="../lista_asignaturas/lista_asignaturas.php">Asignaturas</a>
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
    <!--informacion del rol del usuario-->
    <div class="Informacion">
        <div>
            <h5 href="usuario1.html" class="Actividades badge bg-primary text-wrap">Administrativo</h5>
        </div>
        <div>
            <h1>Intitución Educativa Javier Cortés</h1>
        </div>
        <div>
            <h6 href="usuario.html" class="Actividades badge bg-primary text-wrap nombre_de_usuario">Nombre de Usuario
            </h6>
        </div>
    </div>
    
        <!--tabla docente-->
         <div class="container my-5">
            <div class="row">
                <table >
                    <tr>
                        <th colspan="8" class="titulo_tabla">LISTADO DOCENTE</th>
                    </tr>
                </table>
                <table id="miTabla" class="table table-striped table-hover" style="width: 100%">
                    <thead >
                        <tr >
                            <th colspan="8" class="nuevo_usuario">
                                <button class="boton" onclick="window.location.href='/my_school_app/listado_docente/registro_docente.php'" >+Nuevo</button> <!--id="btn-abrir-modal"-->
                            </th>
                        </tr>
                        <tr>
                            <th>cedula</th>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>Direccion</th>
                            <th>Telefono</th>
                            <th>Email</th>
                            <th colspan="2">Acciones</th>
                        </tr>

                    </thead>
                        <tbody>
                        <!-- Las filas se agregarán o editarán dinámicamente mediante JavaScript -->
                        </tbody>               
                </table>
            </div>
        </div>

            <!--borde inferior-->

    <footer>
        <img class=" schoolapp" src="../iconos/imagenes/my_scholl_app.jpeg" width="60" />
                    <p class="copy">Copyright 2023</p>
                    </footer>
                    <script src="script.js"></script>
                    <!--jquery-->
                    <script 
                        src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
                        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
                        crossorigin="anonymous" 
                        referrerpolicy="no-referrer"></script>
                    <!--Data table-->
                    <script type="text/javascript"
                        src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
                    <script type="text/javascript"
                        src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
                    <script type="text/javascript"
                        src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
                    <script type="text/javascript"
                        src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
                    <script type="text/javascript"
                        src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
                    <script type="text/javascript"
                        src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
                    <script type="text/javascript"
                        src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.bootstrap5.min.js"></script>
                    <script type="text/javascript"
                        src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.colVis.min.js"></script>
                    <script type="text/javascript"
                        src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
                    <script type="text/javascript"
                        src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>
                    <!--bootstrap-->
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
<?php
   /* if(isset($_POST['registrarse'])){
        $cedula=$_POST['cedula']; 
        $nombre=$_POST['nombre'];
        $apellido=$_POST['apellido'];
        $direccion=$_POST['direccion'];
        $telefono=$_POST['telefono'];
        $correo=$_POST['email'];

        //$sexo=$_POST['sexo'];
        //para que genere numeros aleatorios
        //$id=rand(1,99);
        
        $insertarDatos="INSERT INTO datos VALUES('$cedula', '$nombre', '$apellido', '$direccion', '$correo', '$telefono')";
        $ejecutarInsertar = mysqli_query($conexion, $insertarDatos);

        if(!$ejecutarInsertar){
            echo"Error en la linea sql";
        }
    }
*/?>