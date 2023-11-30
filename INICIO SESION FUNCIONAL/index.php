<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="icon" href="../MY SCHOOL APP.jpeg"">
    <link rel="stylesheet" href="style.css">
    <title>My School APP</title>
</head>

<body class="container">
    <div class="row align-items-center">
        <div class="col">
            <div class="text-center">
                <h1 class="text-white">I. E. Javier Cortés</h1>
               <a href="../INICIO/index.html">
                <img class="img-fluid logo-rounded" src="../ESCUDO3.jpeg" width="300">
               </a> 
            </div>
        </div>
        <form class="col" method="post" action="">
            <div class="login card">
                <div class="text-center">
                    <h2>Iniciar Sesion</h2><br>
                </div>
                <div>
                    <label for="user">Usuario: </label><br>
                    <input name="usuario" placeholder="Usuario" class="form-control" type="text" id="usser"/><br>

                    <label for="password">Contraseña: </label><br>
                    <input name="contrasena" placeholder="Contraseña" class="form-control" type="password" id="password"/><br>
                </div>
                <div class="text-center">
                    <input class="btn btn-primary entrar" type="submit" name="btningresar" value="Iniciar Secion">
                    <div>
                    <?php
                        include("conexion_bd.php");
                        include("controlador.php");
                    ?>
                    </div>
                </div>
                <div class="buttons-registers">
                    <button class="btn btn-primary float-start" type="button">¿Olvido su contraseña?</button>
                    <button onclick="window.location.href='../REGISTRO/registro.html';" class="btn btn-primary float-end" type="button">Registrarse</button>
                    <br><br>
                    <button class="btn btn-primary float-start" type="button">Ayuda</button>
                </div>
            </div>
        </form>
    </div>
    <footer>
        <img class="schoolapp" src="../MY SCHOOL APP.jpeg" width="60" />
        <p>Copyright 2023</p>
</footer>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    
</body>

</html>