<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vista logueado</title>
</head>
<body>
  <h1><?php  ?></h1>
  <p><?php 
    if (isset($_SESSION["logueado"])) {
      echo $_SESSION["admin"] ? "Administrador" : "Usuario" ;
    }
    else {
      echo "Deslogueado";
    }
  ?></p>
</body>
</html>