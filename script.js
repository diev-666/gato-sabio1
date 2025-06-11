let puntos = 0;
const puntosSpan = document.getElementById("puntos");
const lista = document.getElementById("listaTareas");
const estadoGato = document.getElementById("estadoGato");
const imagenGato = document.querySelector(".gato");

function agregarTarea() {
  const input = document.getElementById("nuevaTarea");
  const texto = input.value.trim();
  if (texto === "") return;

  const li = document.createElement("li");
  li.innerHTML = `${texto} <button onclick="completarTarea(this)">✔️</button>`;
  lista.appendChild(li);
  input.value = "";
}

function completarTarea(btn) {
  const li = btn.parentElement;
  if (!li.classList.contains("completed")) {
    li.classList.add("completed");
    puntos += 10;
    puntosSpan.textContent = puntos;

   S
    imagenGato.src = "gato_comiendo.png";
    estadoGato.textContent = "¡Tu gato está comiendo! 🍽️";

    setTimeout(() => {
      if (puntos >= 50) {
        imagenGato.src = "gato_feliz.png";
        estadoGato.textContent = "¡Gracias por cuidarme! 😻";
      } else {
        imagenGato.src = "gato.png";
        estadoGato.textContent = "¡Tu gato está feliz! 😺";
      }
    }, 1500);
  }
}
