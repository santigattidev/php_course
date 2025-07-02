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
  </ul>
</body>
</html>