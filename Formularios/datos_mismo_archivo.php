<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $edad = $_POST["edad"];
    echo "Nombre: " . $nombre . "<br>";
    echo "Edad: " . $edad;
} else {
    echo "No se recibieron datos.";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required>
    <br>
    <label for="edad">Edad:</label>
    <input type="number" id="edad" name="edad" required>
    <br>
    <input type="submit" value="Enviar">
  </form>
</body>
</html>