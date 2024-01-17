<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="registro.css" type="text/css" />
</head>
  <body class="container" >
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <div class="bordesuperior">
      <a href="../INICIO/index.html">
        <img class="schoolapp" src="../iconos/imagenes/my_scholl_app.jpeg" width="150" />
      </a>
      <h1 class="Nombre_de_app">My School APP</h1>
    </div>
    <!--inicio de los formularios-->
    <div>
      <h1 class="registro">Registro</h1>
    </div>
    <form id="formulario" method="POST" action="almacenamiento.php">
      <div class="grid">
        <!--dentro de cada label ingresamos los input para que las cajas queden dentro de la misma celda de las grillas-->
        <div class="ladoIz">
        <label for="NOMBRES" class="FIL1" >NOMBRES:</label>
        <br><input placeholder="NOMBRES" class="form NOMBRES" type="text" id="txt_NOMBRES" name="nombre" required/>
        </div>
        <div>
        <label for="APELLIDOS" >APELLIDOS:</label>
        <br><input placeholder="apellido" class="form APELLIDOS" type="text" id="txt_APELLIDOS" name="txt_APELLIDOS" required/>
        </div>
        <div class="ladoIz">
        <label for="CEDULA" class="FIL1">CEDULA:</label>
        <br><input placeholder="CEDULA" class="form CEDULA" type="number" id="int_CEDULA" name="cedula" />
        </div>
        <div>
        <label for="CONTRASEÑA">CONTRASEÑA:</label>
        <br><input placeholder="CONTRASEÑA" class="form CONTRASEÑA" type="password" id="txt_CONTRASEÑA" name="txt_CONTRASEÑA" />
        </div>
        <div class="ladoIz">
        <label for="FECHA" class="FIL1 FECHA">FECHA DE NACIMIENTO:</label>
        <br><input placeholder="FECHA" class="form FECHA" type="date" id="int_FECHA" name="int_FECHA" />
        </div>
        <div>
        <label for="EMAIL">E-MAIL:</label>
        <br><input placeholder="EMAIL" class="form EMAIL" type="email" id="txt_EMAIL" name="txt_EMAIL" />
        </div>
      </div>
      <br><!--creamos el checkbox y el button fuera de la div de clase "grid" para ajustarlos mejor al medio-->
      <div class="checkbox">
        <input type="checkbox" name="checkbox" id="checkbox" required="Acepta" /><label for="CONDICIONES" class="a"><a href="index.html"> Acepta terminos y condiciones</a></label><br>
      </div>
      <br>
      <div class="d-grid gap-2 col-2 mx-auto">
        <button class="btn btn-primary" type="submit">Registrarse</button>
      </div>
  </form>
  </body>
</html>
