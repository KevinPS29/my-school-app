function eliminarObjeto(idFila) {
    var fila = document.getElementById(idFila);
    fila.remove();
  }
  
  function editarInformacion(idFila) {
    var fila = document.getElementById(idFila);
    var celdas = fila.getElementsByTagName('td');
    
    // Obtener datos actuales
    var id = celdas[0].innerText;
    var nombre = celdas[1].innerText;
  
    // Permitir al usuario editar la información (puedes usar un prompt o un formulario)
    var nuevoNombre = prompt('Editar nombre:', nombre);
  
    // Actualizar la información en la tabla
    if (nuevoNombre !== null) {
      celdas[1].innerText = nuevoNombre;
    }
  }
  