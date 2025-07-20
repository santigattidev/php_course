<?php

class Persona{
  public $nombre;
  public $apellido;
  public $edad;
  public $pais;

  public function __construct($nombre, $apellido, $edad, $pais) {
    $this->nombre = $nombre;
    $this->apellido = $apellido;
    $this->edad = $edad;
    $this->pais = $pais;
  }

  public function presentacion(){
    return "Hola, mi nombre es $this->nombre $this->apellido, tengo $this->edad años y soy de $this->pais.";
  }
}

$carlos = new Persona("Carlos", "Gomez", 25, "España");
$pedro = new Persona("Pedro", "Lopez", 30, "Bolivia");

echo "$carlos->nombre dice: " . $carlos->presentacion() . "<br>";

?>