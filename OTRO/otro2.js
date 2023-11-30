let modoEdicion = false;
let filaEditada = null;

function agregarOEditar() {
  const nombreInput = document.getElementById('nombre');
  const tablaBody = document.querySelector('#miTabla tbody');

  if (modoEdicion) {
    // Modo de edición
    filaEditada.cells[1].innerText = nombreInput.value;
    modoEdicion = false;
    filaEditada = null;
  } else {
    // Modo de agregado
    const nuevaFila = tablaBody.insertRow();
    const celdaId = nuevaFila.insertCell(0);
    const celdaNombre = nuevaFila.insertCell(1);
    const celdaAcciones = nuevaFila.insertCell(2);

    celdaId.innerText = tablaBody.rows.length; // Asignar un ID único
    celdaNombre.innerText = nombreInput.value;

    const botonEditar = document.createElement('button');
    botonEditar.textContent = 'Editar';
    botonEditar.onclick = function() {
      editarFila(nuevaFila);
    };

    celdaAcciones.appendChild(botonEditar);
  }

  // Limpiar el formulario
  nombreInput.value = '';
}

function editarFila(fila) {
  const nombre = fila.cells[1].innerText;
  const nombreInput = document.getElementById('nombre');

  // Llenar el formulario con los datos existentes
  nombreInput.value = nombre;

  // Cambiar al modo de edición
  modoEdicion = true;
  filaEditada = fila;
}
