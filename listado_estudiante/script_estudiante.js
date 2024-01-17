let listaPersonas=[];

// modal Insertar

const btnAbrirModalInsertar=
document.querySelector("#btn-abrir-modal-insertar");


const modalInsertar=
document.querySelector("#modal-insertar");

btnAbrirModalInsertar.addEventListener("click",()=>{
    modalInsertar.showModal();
})

// modal editar

const modalEditar=
document.querySelector("#modal-editar");

function obtenerpersona() {
  const tablaBody = document.querySelector('#miTabla tbody');

  // Limpiar la tabla antes de cargar los nuevos persona
  while (tablaBody.firstChild) {
      tablaBody.removeChild(tablaBody.firstChild);
  }

  // Enviar una solicitud al servidor para obtener los persona
  fetch('obtener_estudiante.php', {
      method: 'GET',
  })
  .then(response => response.json())
  .then(data => {
    listaPersonas=data;

      // Agregar las filas a la tabla
      data.forEach(persona => {
          const fila = tablaBody.insertRow();
          fila.insertCell(0).innerText = persona.cedula;
          fila.insertCell(1).innerText = persona.nombre;
          fila.insertCell(2).innerText = persona.apellido;
          fila.insertCell(3).innerText = persona.direccion;
          fila.insertCell(4).innerText = persona.telefono;
          fila.insertCell(5).innerText = persona.email;

          // Agregar botón de editar a cada fila
          const botonEditar = document.createElement('button');
          botonEditar.textContent = '';
          botonEditar.style.padding='0px';
          botonEditar.style.borderRadius = '4px';
          botonEditar.style.backgroundColor = 'blue';
          const iconoEditar = document.createElement('img');
          iconoEditar.src = '../iconos/botones/LAPIZ2.png';
          iconoEditar.alt = 'Editar'; // Texto alternativo para la imagen
          iconoEditar.style.width = '25px'; // Establecer el ancho de la imagen según sea necesario
          iconoEditar.style.height = '25px';
          botonEditar.appendChild(iconoEditar);
        // se llama la funcion para editar al hacer clic en el boton
          botonEditar.onclick = function() {
                 modalEditar.showModal();
                 abrirEditarPersona(persona.cedula);
          };
          //lugar del boton editar
          fila.insertCell(6).appendChild(botonEditar); 

          // Agregar botón de eliminar a cada fila
          const botonEliminar = document.createElement('button');
          botonEliminar.textContent = '';
          botonEliminar.style.padding='0px';
          botonEliminar.style.borderRadius = '4px';
          botonEliminar.style.backgroundColor = 'red';

          const iconoEliminar = document.createElement('img');
          iconoEliminar.src = '../iconos/botones/ELIMINAR.png';
          iconoEliminar.alt = 'Eliminar';
          iconoEliminar.style.width = '25px';
          iconoEliminar.style.height = '25px';
          botonEliminar.appendChild(iconoEliminar);
          // se llama a la funcion del boton eliminar
          botonEliminar.onclick = function() {
              eliminarFila(persona.cedula);
          };
          // lugar del boton eliminar
          fila.insertCell(7).appendChild(botonEliminar);
      });
  })
  .catch(error => console.error('Error:', error));
}
// funcion eliminar
function eliminarFila(id) {
  // Enviar una solicitud al servidor para eliminar el registro
  fetch('eliminar_estudiante.php', {
      method: 'POST',
      headers: {
          'Content-Type': 'application/x-www-form-urlencoded',
      },
      body: `accion=eliminar&cedula=${id}`,
  })
  .then(response => response.text())
  .then(data => {
      console.log(data);

      // Actualizar la tabla o realizar otras acciones según sea necesario
      obtenerpersona();
  })
  .catch(error => console.error('Error:', error));
}
// funcion para editar datos
function abrirEditarPersona(cedula){
    
        let personaFiltrada = null;
        listaPersonas.filter(persona=>{
            if(cedula==persona.cedula){
                personaFiltrada = persona;
                
            }
        })
        // codigo para mostrar los datos a editar en el modal
        const cedulaInput = document.getElementById('cedula-editable');
        cedulaInput.value = personaFiltrada.cedula;
        const nombreInput = document.getElementById('nombre-editable');
        nombreInput.value = personaFiltrada.nombre;
        const apellidosInput = document.getElementById('apellido-editable');
        apellidosInput.value = personaFiltrada.apellido;
        const direccionInput = document.getElementById('direccion-editable');
        direccionInput.value = personaFiltrada.direccion;
        const telefonoInput = document.getElementById('telefono-editable');
        telefonoInput.value = personaFiltrada.telefono;
        const emailInput = document.getElementById('email-editable');
        emailInput.value = personaFiltrada.email;
}

// Cargar persona al cargar la página
document.addEventListener('DOMContentLoaded', obtenerpersona);


