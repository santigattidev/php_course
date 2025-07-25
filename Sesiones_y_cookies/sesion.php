<?php

session_start();

$nombre_usuario = "Juan";
$contrasena_usuario = "123456";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nombre = $_POST["nombre"];
  $contrasena = $_POST["contrasena"];
  if ($nombre == "admin" && $contrasena == "admin") {
    $_SESSION["logueado"] = true;
    $_SESSION["admin"] = true;
  }
  elseif ($nombre == $nombre_usuario && $contrasena == $contrasena_usuario) {
    $_SESSION["logueado"] = true;
    $_SESSION["admin"] = false;
  }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sesiónes</title>
</head>
<body>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required> <br>
    <label for="contrasena">Contraseña:</label>
    <input type="password" id="contrasena" name="contrasena" required> <br>
    <input type="submit" value="Iniciar sesión">
  </form>
    <a href="logout.php">Cerrar sesión</a>
</body>
</html>