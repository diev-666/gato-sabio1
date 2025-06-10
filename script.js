let puntos = 0;

function agregarTarea() {
  const input = document.getElementById('nuevaTarea');
  const tareaTexto = input.value.trim();

  if (tareaTexto === '') {
    alert('Por favor escribe una tarea.');
    return;
  }

  const lista = document.getElementById('listaTareas');

  const li = document.createElement('li');
  li.textContent = tareaTexto;

  const btnCompletar = document.createElement('button');
  btnCompletar.textContent = '✔️';
  btnCompletar.onclick = function () {
    if (!li.classList.contains('completed')) {
      li.classList.add('completed');
      puntos += 10;
      document.getElementById('puntos').textContent = puntos;
      document.getElementById('estadoGato').textContent = '¡Buen trabajo! El gato está feliz 😺';
    }
  };

  const btnEliminar = document.createElement('button');
  btnEliminar.textContent = '❌';
  btnEliminar.onclick = function () {
    lista.removeChild(li);
  };

  li.appendChild(btnCompletar);
  li.appendChild(btnEliminar);
  lista.appendChild(li);

  input.value = '';
}