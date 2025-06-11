<?php
session_start();
if (!isset($_SESSION['usuario'])) {
  header("Location: login.php");
  exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gato Sabio - Recordatorio de Tareas</title>
  <link rel="stylesheet" href="estilos.css">
</head>
<body>
  <header class="header">
    <h1>🐱 Gato Sabio</h1>
    <nav>
      <span>Bienvenido, <?php echo $_SESSION['usuario']; ?>!</span>
      <button onclick="location.href='logout.php'">Cerrar Sesión</button>
      <button onclick="location.href='#agregar'">Agregar Tarea</button>
    </nav>
  </header>

  <main>
    <section class="mascota">
      <img src="gato_triste.jpeg" alt="Gato Sabio" class="gato">
      <p id="estadoGato">¡Alimenta a tu gato con tareas cumplidas!</p>
      <p>Puntos: <span id="puntos">0</span></p>
    </section>

    <section class="tareas" id="agregar">
      <h2>Agregar Tarea</h2>
      <input type="text" id="nuevaTarea" placeholder="Escribe una nueva tarea">
      <button onclick="agregarTarea()">Agregar</button>
      <ul id="listaTareas"></ul>
    </section>
  </main>

  <script src="script.js"></script>
</body>
</html>
