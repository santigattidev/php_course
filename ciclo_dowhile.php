<?php

$meses = array(
    "enero" => 31,
    "febrero" => 28,
    "marzo" => 31,
    "abril" => 30,
    "mayo" => 31,
    "junio" => 30,
    "julio" => 31,
    "agosto" => 31,
    "septiembre" => 30,
    "octubre" => 31,
    "noviembre" => 30,
    "diciembre" => 31
);
$i = 0;
do {
    $mes = array_keys($meses)[$i];
    $dias = $meses[$mes];
    echo "El mes de $mes tiene $dias días.<br />";
    $i++;
} while ($i < count($meses));


?>