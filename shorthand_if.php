<?php

// This code demonstrates the use of shorthand if statements in PHP
$edad = 25;
$edad = (isset($edad)) ? $edad : 'desconocida';
echo 'la edad es: ' . $edad . '<br>';

?>