<?php

$meses = array(
    "enero" => "January",
    "febrero" => "February",
    "marzo" => "March",
    "abril" => "April",
    "mayo" => "May",
    "junio" => "June",
    "julio" => "July",
    "agosto" => "August",
    "septiembre" => "September",
    "octubre" => "October",
    "noviembre" => "November",
    "diciembre" => "December"
    
);

$datos = array(
    array("nombre" => "John",
    "edad" => 30,
    "profesion" => "Developer"),
    array("nombre" => "Jane",
    "edad" => 25,
    "profesion" => "Designer")
);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <ul>
    <?php
    foreach ($meses as $mes):
      echo "<li>" . $mes . " - " . $mes . "</li>";
    endforeach;
    ?>
    <h2>Meses del Año con =></h2>
    <?php
    foreach ($meses as $mes => $mes):
      echo "<li>" . $mes . "</li>";
    endforeach;
    ?>
    <h2>Datos con =></h2>
    <?php
    foreach ($datos as $dato):
      echo "<li>" . $dato["nombre"] . " - " . $dato["edad"] . " - " . $dato["profesion"] . "</li>";
    endforeach;
    ?>
  </ul>
</body>
</html>