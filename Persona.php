<?php
/**
 * Clase de persona
 */
class Persona
{
  public $nombre;
  public $edad;

  function __construct($nombre,$edad)
  {
    $this->nombre = $nombre;
    $this->edad = $edad;
  }
  public function getNombre() {
    return $this->nombre;
  }
  public function getEdad() {
    return $this->edad;
  }
}

$integrante = new Persona('Pedro', 45);
echo $integrante->getNombre();
