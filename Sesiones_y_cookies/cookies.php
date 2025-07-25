<?php

setcookie("nombre", "Juan", time() + 60 * 60 * 24 * 30, "/");
setcookie("apellido", "Perez", time() + 60 * 60 * 24 * 30, "/");

$nombre = $_COOKIE["nombre"];
$apellido = $_COOKIE["apellido"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cookies</title>
</head>
<body>
  <?php echo "Bienvenido $nombre $apellido"; ?>
</body>
</html>