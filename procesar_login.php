<?php
session_start();
$conn = new mysqli("localhost", "root", "", "gato_sabio");

if ($conn->connect_error) {
  die("Error de conexión: " . $conn->connect_error);
}

$email = $_POST['email'];
$contrasena = $_POST['contrasena'];

$sql = "SELECT id, nombre, contrasena FROM usuarios WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows === 1) {
  $stmt->bind_result($id, $nombre, $hash);
  $stmt->fetch();

  if (password_verify($contrasena, $hash)) {
    $_SESSION['usuario'] = $nombre;
    header("Location: index.php");
    exit();
  } else {
    echo "Contraseña incorrecta.";
  }
} else {
  echo "Usuario no encontrado.";
}

$stmt->close();
$conn->close();
?>
