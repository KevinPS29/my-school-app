function agregarOEditar(event) {
  event.preventDefault(); // Evitar la recarga de la página al enviar el formulario

  const nombreInput = document.getElementById('nombre');
  const apellidosInput = document.getElementById('apellidos');
  const direccionInput = document.getElementById('direccion');
  const telefonoInput = document.getElementById('telefono');
  const emailInput = document.getElementById('email');
  const tablaBody = document.querySelector('#miTabla tbody');

  const persona = {
      accion: modoEdicion ? 'editar' : 'guardar',
      cedula: modoEdicion ? filaEditada.cells[0].innerText : null,
      nombre: nombreInput.value,
      apellidos: apellidosInput.value,
      direccion: direccionInput.value,
      telefono: telefonoInput.value,
      email: emailInput.value,
  };

  // Enviar una solicitud al servidor para guardar el registro
  fetch('guardar.php', {
      method: 'POST',
      headers: {
          'Content-Type': 'application/x-www-form-urlencoded',
      },
      body: new URLSearchParams(persona),
  })
  .then(response => response.text())
  .then(data => {
      console.log(data);

      // Limpiar los campos del formulario
      nombreInput.value = '';
      apellidosInput.value = '';

      // Actualizar la tabla o realizar otras acciones según sea necesario
      obtenerpersona();
  })
  .catch(error => console.error('Error:', error));
}

function obtenerpersona() {
  const tablaBody = document.querySelector('#miTabla tbody');

  // Limpiar la tabla antes de cargar los nuevos persona
  while (tablaBody.firstChild) {
      tablaBody.removeChild(tablaBody.firstChild);
  }

  // Enviar una solicitud al servidor para obtener los persona
  fetch('obtener.php', {
      method: 'GET',
  })
  .then(response => response.json())
  .then(data => {
      // Agregar las filas a la tabla
      data.forEach(persona => {
          const fila = tablaBody.insertRow();
          fila.insertCell(0).innerText = persona.cedula;
          fila.insertCell(1).innerText = persona.nombre;
          fila.insertCell(2).innerText = persona.apellidos;
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

          botonEditar.onclick = function() {
              //agregarOEditar(persona.nombre);
          };

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

          botonEliminar.onclick = function() {
              eliminarFila(persona.cedula);
          };

          fila.insertCell(7).appendChild(botonEliminar);
      });
  })
  .catch(error => console.error('Error:', error));
}

function eliminarFila(id) {
  // Enviar una solicitud al servidor para eliminar el registro
  fetch('eliminar.php', {
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



// Cargar persona al cargar la página
document.addEventListener('DOMContentLoaded', obtenerpersona);
