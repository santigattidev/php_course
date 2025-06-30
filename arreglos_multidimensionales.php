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

echo $amigos["amigo1"]["nombre"] . " se caga en " . $amigos["amigo2"]["nombre"] . '<br />';

?>