<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="icon" href="../iconos/imagenes/my_scholl_app.jpeg">
    <link rel="stylesheet" href="style.css">
    <title>My School APP</title>
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
    <div class="row align-items-center">
        <div class="col">
            <div class="text-center">
                <h1 class="text-white">I. E. Javier Cortés</h1>
               <a href="../inicio/inicio.php">
                <img  class="logo_rounded" src="../iconos/imagenes/escudo3.jpeg" width="300">
               </a> 
            </div>
        </div>
        <div class="col">
            <div class="login card">
                <div class="text-center">
                    <h2>Selecciona un ROL</h2><br>
                </div>

                <diV class="text-center">
                    <button onclick="window.location.href='/my_school_app/inicio_sesion_docente/index.php'" class="btn btn-primary entrar"> <img class="configuracion persona" src="../iconos/botones/PERSONA.png" width="30"> Docente</button>
                </diV><br>
                <diV class="text-center">
                    <button onclick="window.location.href='/my_school_app/inicio_sesion_estudiante/index.php'" class="btn btn-primary entrar"> <img class="configuracion persona" src="../iconos/botones/PERSONA.png" width="30"> Estudiante</button>
                </diV><br>
                <diV class="text-center">
                    <button onclick="window.location.href='/my_school_app/inicio_sesion_administrativo/index.php'" class="btn btn-primary entrar"> <img class="configuracion persona" src="../iconos/botones/PERSONA.png" width="30"> Administrador</button>
                </diV>

            </div>
        </div>
    </div>
    <footer>
        <img class="schoolapp" src="../iconos/imagenes/my_scholl_app.jpeg" width="60" />
        <p>Copyright 2023</p>
</footer>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    
</body>

</html>