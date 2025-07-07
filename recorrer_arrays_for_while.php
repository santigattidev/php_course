<?php

$amigos = array(
  "amigo1" => array(
    "nombre" => "Juan",
    "edad" => 25,
    "ciudad" => "Madrid"
  ),
  "amigo2" => array(
    "nombre" => "Ana",
    "edad" => 30,
    "ciudad" => "Barcelona"
  ),
  "amigo3" => array(
    "nombre" => "Luis",
    "edad" => 28,
    "ciudad" => "Valencia"
  )
);
for($i = 0; $i < count($amigos); $i++) {
  $amigo = $amigos["amigo" . ($i + 1)];
  echo "Nombre: " . $amigo["nombre"] . ", Edad: " . $amigo["edad"] . ", Ciudad: " . $amigo["ciudad"] . "<br />";
}

$i = 0;
while($i < count($amigos)) {
  $amigo = $amigos["amigo" . ($i + 1)];
  echo "Nombre: " . $amigo["nombre"] . ", Edad: " . $amigo["edad"] . ", Ciudad: " . $amigo["ciudad"] . "<br />";
  $i++;
}

?>