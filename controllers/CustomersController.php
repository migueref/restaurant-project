<?php

require_once("../Models/Customer.php");

/**
 * ISSET ayuda a saber si la variable operación
 */
if(isset($_POST['operacion'])) {
  $operacion = $_POST['operacion'];

  switch ($operacion) {
    case 'AgregarCliente':
      $nombre = $_POST['nombre'];
      $direccion = $_POST['direccion'];
      $telefono = $_POST['telefono'];

      $cliente = new Customer($nombre, $direccion, $telefono);
      $cliente->save();
      break;

    default:
      # code...
      break;
  }
}
