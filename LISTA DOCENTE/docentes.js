

let modoEdicion = false;
let filaEditada = null;



// modal

const btnAbrirModal=
document.querySelector("#btn-abrir-modal");

const btnCerrarModal=
document.querySelector("#btn-cerrar-modal");


const modal=
document.querySelector("#modal");

btnAbrirModal.addEventListener("click",()=>{
    modal.showModal();
})

btnCerrarModal.addEventListener("click",()=>{
    modal.close();
})


//agregar informacion del formulario y editar

function agregarOEditar() {
    const cedulaInput = document.getElementById('cedula');
    const nombreInput = document.getElementById('nombre');
    const apellidosInput = document.getElementById('apellidos');
    const direccionInput = document.getElementById('direccion');
    const telefonoInput = document.getElementById('telefono');
    const emailInput = document.getElementById('email');

    const tablaBody = document.querySelector('#miTabla tbody');
  
    if (modoEdicion) {
      // Modo de edición
      filaEditada.cells[0].innerText = cedulaInput.value;
      filaEditada.cells[1].innerText = nombreInput.value;
      filaEditada.cells[2].innerText = apellidosInput.value;
      filaEditada.cells[3].innerText = direccionInput.value;
      filaEditada.cells[4].innerText = telefonoInput.value;
      filaEditada.cells[5].innerText = emailInput.value;

      modoEdicion = false;
      filaEditada = null;
    } else {
      // Modo de agregado
      const nuevaFila = tablaBody.insertRow();
      const celdaId = nuevaFila.insertCell(0);
      const celdaNombre = nuevaFila.insertCell(1);
      const celdaApellido = nuevaFila.insertCell(2);
      const celdaDireccion = nuevaFila.insertCell(3);
      const celdaTelefono = nuevaFila.insertCell(4);
      const celdaEmail = nuevaFila.insertCell(5);
      const celdaAcciones = nuevaFila.insertCell(6);
  
// Asignar un ID único es asi celdaId.innerText = tablaBody.rows.length; // Asignar un ID único
      celdaId.innerText = cedulaInput.value;
      celdaNombre.innerText = nombreInput.value;
      celdaApellido.innerText = apellidosInput.value;
      celdaDireccion.innerText = direccionInput.value;
      celdaTelefono.innerText = telefonoInput.value;
      celdaEmail.innerText = emailInput.value;

      //crear el boton editar 
  
      const botonEditar = document.createElement('button');
      botonEditar.textContent = '';
      botonEditar.style.padding='0px';
      botonEditar.style.borderRadius = '4px';
      botonEditar.style.backgroundColor = 'blue';
      const iconoEditar = document.createElement('img');
      iconoEditar.src = '../ICONOS/LAPIZ2.png';
      iconoEditar.alt = 'Editar'; // Texto alternativo para la imagen
      iconoEditar.style.width = '25px'; // Establecer el ancho de la imagen según sea necesario
      iconoEditar.style.height = '25px';
      botonEditar.appendChild(iconoEditar);


      //botonEditar.classList.add('boton-editar');

      //aparezca el modal al hacer clic en el boton editar
      botonEditar.onclick = function() {
            modal.showModal();
        editarFila(nuevaFila);
      };
  
      celdaAcciones.appendChild(botonEditar);

      // funcion editar
  function editarFila(fila) {
    const cedula = fila.cells[0].innerText;
    const nombre = fila.cells[1].innerText;
    const apellidos = fila.cells[2].innerText;
    const direccion = fila.cells[3].innerText;
    const telefono = fila.cells[4].innerText;
    const email = fila.cells[5].innerText;
    const cedulaInput = document.getElementById('cedula');
    const nombreInput = document.getElementById('nombre');
    const apellidosInput = document.getElementById('apellidos');
    const direccionInput = document.getElementById('direccion');
    const telefonoInput = document.getElementById('telefono');
    const emailInput = document.getElementById('email');

  
    // Llenar el formulario con los datos existentes
    cedulaInput.value = cedula;
    nombreInput.value = nombre;
    apellidosInput.value = apellidos;
    direccionInput.value = direccion;
    telefonoInput.value = telefono;
    emailInput.value = email;
  
    // Cambiar al modo de edición
    modoEdicion = true;
    filaEditada = fila;
  }


    //funcion eliminar fila     
    // Crear el botón de eliminar
    const botonEliminar = document.createElement('button');
    botonEliminar.textContent = '';
    botonEliminar.style.padding='0px';
    botonEliminar.style.borderRadius = '4px';
    botonEliminar.style.backgroundColor = 'red';
  
    const iconoEliminar = document.createElement('img');
    iconoEliminar.src = '../ICONOS/ELIMINAR.png';
    iconoEliminar.alt = 'Eliminar';
    iconoEliminar.style.width = '25px';
    iconoEliminar.style.height = '25px';
    botonEliminar.appendChild(iconoEliminar);
  
    botonEliminar.onclick = function() {
      eliminarFila(nuevaFila);
    };
  
    celdaAcciones.appendChild(botonEliminar);
  

  function eliminarFila(fila) {
    fila.remove();
  }
    
    
    }
  
    // Limpiar el formulario
    cedulaInput.value = null;
    nombreInput.value = '';
    apellidosInput.value = '';
    direccionInput.value = '';
    telefonoInput.value = '';
    emailInput.value = '';
  }







  