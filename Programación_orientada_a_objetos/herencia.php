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

class Empleado extends Persona {
  public $puesto;

  public function __construct($nombre, $apellido, $edad, $pais, $puesto) {
    parent::__construct($nombre, $apellido, $edad, $pais);
    $this->puesto = $puesto;
  }

  public function presentacion() {
    return parent::presentacion() . " Trabajo como $this->puesto.";
  }
}

?>