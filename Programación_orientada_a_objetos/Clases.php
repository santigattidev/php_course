<?php

class Persona{
  public $nombre;
  public $apellido;
  public $edad;
  public $pais;
  public function presentacion(){
    return "Hola, mi nombre es $this->nombre $this->apellido, tengo $this->edad años y soy de $this->pais.";
  }
}

$carlos = new Persona;
$carlos->nombre = "Carlos";
$carlos->apellido = "Gomez";  
$carlos->edad = 25;
$carlos->pais = "España";

$pedro = new Persona;
$pedro->nombre = "Pedro";
$pedro->apellido = "Lopez";
$pedro->edad = 30;
$pedro->pais = "Bolivia";

echo "$carlos->nombre dice: " . $carlos->presentacion() . "<br>";

?>
