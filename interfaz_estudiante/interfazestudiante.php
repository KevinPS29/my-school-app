<!-- pagina_protegida que debe ingresar con la clave y contraseña-->
<?php
session_start();


// Cerrar sesión cuando se hace clic en el boton cerrar sesion
if (isset($_GET["cerrar_sesion"])) {
    session_unset();
    session_destroy();
    header('Location: ../inicio_sesion_rol/index.php');
    exit();
}

function mostrar () {
$conex = new mysqli("localhost","root","","kevis", "3306"); 

$_SESSION["usuario"];



if ($conex) {
	$consulta = "SELECT * FROM persona";
	$resultado = mysqli_query($conex,$consulta);
	if ($resultado ) {
		while ($row = $resultado->fetch_array()) {
            $id = $row['cedula'];
            $nombre = $row['nombre'];
            $apellidos = $row['apellido'];
            $direccion = $row['direccion'];
            $telefono = $row['telefono'];
            $email = $row['email'];
            ?>
            
                <div class= datos_usuario>
                        <?php 
                                        if($nombre==$_SESSION["usuario"]){
                                            echo "<h2><b>Nombre: </b>  $nombre </h2> <br>
                                                  <h4>
                                                  <b>Apellidos: </b>  $apellidos <br>
                                                  <b>Direccion: </b>  $direccion <br>
                                                  <b>Telefono: </b>  $telefono <br>
                                                  <b>Email: </b>  $email <br> 
                                                  </h4>
                                            ";
                                        }
                         ?>
                </div>
            <?php
            }
          
	    }
	}
}

?>


<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inicio</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../interfaz_estudiante/interfaz_estudiante.css" type="text/css" />
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
               <a href="../interfaz_administrativa/interfazadmin.php">
                <img  class="logo" src="../iconos/imagenes/escudo3.jpeg" width="80">
               </a>
        </div>
        <div class="bordesuperior">
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
    <!--informacion del rol del usuario-->
    <div class="Informacion">
        <div>
            <h5 href="usuario1.html" class="Actividades badge bg-primary text-wrap">Estudiante</h5>
        </div>
    </div>
        <!-- tabla de gestion principal -->
    <div>
        <!--tabla de gestion institucion-->
        <table class="gestion_institucion container">
            <tr>
                <th  class="titulo">Institucion Educativa Javier Cortes</th>
            </tr>
            <tr>
                <td class="grid_2" >
                    <div>
                        <img class="logo2" src="../iconos/imagenes/escudo3.jpeg" width="200">
                    </div>                    
                    <div>
                        <?php 
                        echo mostrar();
                        ?>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <div>
    </div>
    <!--borde inferior-->  
    <footer class="bordeinferior">
        <img class="schoolapp" src="../iconos/imagenes/my_scholl_app.jpeg" width="60" />
        <p>Copyright 2023</p>
</footer>
<script src="admin.js"></script>
    </body>
</html>