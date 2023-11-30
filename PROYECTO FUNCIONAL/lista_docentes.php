<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../LISTA DOCENTE/listadocentes.css">
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
    <!--borde superior-->
    <div class="bordesuperior">
        <div>
            <img class="logo" src="../ESCUDO3.jpeg" width="80">
        </div>
        <div class="bordesuperior">
            <a class="hover" href="../INICIO/index.html">Nosotros</a>
            <a class="hover" href="../ASIGNATURA/asignatura.html">Asignaturas</a>
            <a class="hover" href="../CALIFICACIONES/index.html">Calificaciones</a>
            <a class="hover" href="../ASIGNATURA/asignatura.html">Soporte</a>
            <a class="hover" href="usuario.html" class="usuario">Usuario</a>
            <div class="Dropdown">
                <img class="configuracion" src="../CONFIGURACION.jpeg" width="40">
                <div class="Dropdown-content">
                    <a href="#">Ver perfil</a>
                    <a href="#">configuración</a>
                    <a href="#">Cerrar sesión</a>
                </div>
            </div>
        </div>
    </div>
    <!--informacion del rol del usuario-->
    <div class="Informacion">
        <div>
            <h5 href="usuario1.html" class="Actividades badge bg-primary text-wrap">Docentes</h5>
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
                        <th colspan="7" class="titulo_tabla">LISTA DOCENTE</th>
                    </tr>
                </table>
                <table id="miTabla" class="table table-striped table-hover" style="width: 100%">
                    <thead >
                        <tr >
                            <th colspan="7" class="nuevo_usuario">
                                <button class="boton" id="btn-abrir-modal">+Nuevo</button>
                            </th>
                        </tr>
                        <tr id= "fila">
                            <th>Documento</th>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>Direccion</th>
                            <th>Telefono</th>
                            <th>Email</th>
                            <th>opciones</th>
                        </tr>
                    </thead>
                    <tbody id="table_users"></tbody>                    
                </table>
            </div>
        </div>

        <!--MODAL-->
        <dialog id="modal">
            <h1 class="registro">Agregar nuevo docente</h1>
            <br>
            <form class="formRegistro" id="formulario" method="POST dialog">
                <div class="grid">
                    <!--dentro de cada label ingresamos los input para que las cajas queden dentro de la misma celda de las grillas-->
                    <div class="ladoIz">
                            <label for="CEDULA" class="FIL1">CEDULA:</label>
                            <br><input placeholder="CEDULA" class="form CEDULA" type="number" id="cedula"
                            name="int_CEDULA" />
                    </div>
                    <div class="ladoDr">
                        <label for="nombre" class="FIL1">NOMBRES:</label>
                        <br><input placeholder="NOMBRES" class="form NOMBRES" type="text" id="nombre"
                            name="txt_NOMBRES" required />
                    </div>
                    <div class="ladoIz">
                        <label for="APELLIDOS">APELLIDOS:</label>
                        <br><input placeholder="APELLIDOS" class="form APELLIDOS" type="text" id="apellidos"
                            name="txt_APELLIDOS" required />
                    </div>
                    <div class="ladoDr">
                        <label for="direccion">DIRECCION:</label>
                        <br><input placeholder="DIRECCION" class="form direccion" type="text" id="direccion"
                            name="direccion" />
                    </div>
                    <div class="ladoIz">
                        <label for="TELEFONO" class="FIL1 TELEFONO">TELEFONO:</label>
                        <br><input placeholder="TELEFONO" class="form telefono" type="number" id="telefono" name="telefono" />
                    </div>
                    <div class="ladoDr">
                        <label for="EMAIL">E-MAIL:</label>
                        <br><input placeholder="EMAIL" class="form EMAIL" type="email" id="email"
                            name="txt_EMAIL" />
                    </div>
                </div>
                <br>
                <div class="d-grid gap-2 col-2 mx-auto">
                    <button class="btn btn-primary" type="button"" id="btn-cerrar-modal" onclick="agregarOEditar()">Registrar/Editar</button>
                </div>
            </form>
        </dialog>
            <!--borde inferior-->

    <footer>
        <img class=" schoolapp" src="../MY SCHOOL APP.jpeg" width="60" />
                    <p class="copy">Copyright 2023</p>
                    </footer>

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
                    <script src="../LISTA DOCENTE/docentes.js"></script>

</body>

</html>