<?php
$conn = new mysqli("localhost", "root", "", "gato_sabio");

if ($conn->connect_error) {
  die("Error de conexión: " . $conn->connect_error);
}

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$contrasena = password_hash($_POST['contrasena'], PASSWORD_DEFAULT);

$sql = "INSERT INTO usuarios (nombre, email, contrasena) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $nombre, $email, $contrasena);
$stmt->execute();

if ($stmt->affected_rows > 0) {
  echo "Registro exitoso. <a href='login.php'>Iniciar sesión</a>";
} else {
  echo "Error: " . $conn->error;
}

$stmt->close();
$conn->close();
?>
