<?php

// recibe.php
$name = $_POST['name'] ?? 'No name provided';
$subscribe = $_POST['subscribe'] ?? 'Not specified';

echo 'Name: ' . $name . "<br>";
echo 'Subscribed: ' . $subscribe . "<br>";

?>