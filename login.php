<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Iniciar Sesión - Gato Sabio</title>
  <link rel="stylesheet" href="styles.css">
  <style>
    .form-container {
      max-width: 400px;
      margin: 50px auto;
      padding: 30px;
      background: white;
      border-radius: 15px;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    }
    .form-container h2 {
      color: #6a1b9a;
      margin-bottom: 20px;
    }
    .form-container input, .form-container button {
      width: 100%;
      padding: 10px;
      margin: 10px 0;
      border-radius: 10px;
      border: 2px solid #ce93d8;
    }
    .form-container button {
      background-color: #ba68c8;
      color: white;
      font-weight: bold;
      border: none;
    }
    .form-container button:hover {
      background-color: #9c27b0;
    }
  </style>
</head>
<body>
  <div class="form-container">
    <h2>Iniciar Sesión</h2>
    <form action="procesar_login.php" method="POST">
      <input type="email" name="email" placeholder="Correo electrónico" required>
      <input type="password" name="contrasena" placeholder="Contraseña" required>
      <button type="submit">Entrar</button>
    </form>
    <p style="text-align:center;">¿No tienes cuenta? <a href="registro.php">Regístrate</a></p>
  </div>
</body>
</html>
