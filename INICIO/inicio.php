<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inicio</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../inicio/inicio.css" type="text/css" />
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
      <img class="logo" src="../iconos/imagenes/escudo3.jpeg"width="70" height="70" >
      <div>
        <button type="button" onclick="window.location.href='/my_school_app/inicio_sesion/index.php'" class="inicio_sesion btn btn-primary fw-medium">Iniciar sesion</button>
      </div>
    </div>

    <div class="grid">
      <div class="MV">
        <div class="M1">
          <div class="M2">
            <img src="../iconos/imagenes/mision.jpeg" class="MISION" width="50">
            <h6 class=" fst-italic fw-medium">Misión</h6>    
          </div>
          <div>
            <h6 class="text">Nuestra misión es proporcionar una educación de calidad, centrada en el aprendizaje, que nutra el intelecto, fomente la curiosidad, desarrolle habilidades críticas y fomente los valores éticos. Nos comprometemos a crear un entorno inclusivo y enriquecedor donde cada estudiante pueda alcanzar su máximo potencial académico, social y personal. A través de la colaboración, la investigación y la innovación pedagógica, buscamos empoderar a nuestros estudiantes para que se conviertan en ciudadanos globales comprometidos con la mejora de la sociedad y el respeto por el medio ambiente.
            </h6>
          </div>
        </div>
        <div class="V1">
          <div class="V2">
            <img src="../iconos/imagenes/vision.jpeg" class="VISION" width="50">
            <h6 class=" fst-italic fw-medium ">Visión</h6>
          </div>
          <div>
            <h6 class="text"> En el año 2025 la Institucion Educativa Javier Cortes sera reconocida como líder en la excelencia educativa, inspirando el crecimiento integral de nuestros estudiantes y contribuyendo activamente a la construcción de un mundo más equitativo y sostenible. Nos esforzamos por ser un faro de conocimiento, innovación y valores, guiando a las generaciones futuras hacia un futuro brillante y prometedor.
            </h6>
          </div>
      </div>
      </div>
      <div class="IEJAVIER">
        <img src="../iconos/imagenes/escudo3.jpeg" class="LOGO2" width="350">
        <h1>I.E JAVIER CORTES</h1>
      </div>
    </div>
    <footer>
      <img class="schoolapp" src="../iconos/imagenes/my_scholl_app.jpeg" width="60" />
      <p>Copyright 2023</p>
</footer>
  </body>
</html>
