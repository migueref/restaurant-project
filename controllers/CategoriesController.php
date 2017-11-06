<?php
if( isset($_POST['operacion']) ) {
  require_once('../models/Category.php');

  switch ($_POST['operacion']) {
    case 'registrarCategoria':
      $nombre = $_POST['nombreCategoria'];
      $descripcion = $_POST['descripcionCategoria'];

      $categoria = new Category($nombre,$descripcion);
      $categoria->save();
      break;

    default:
      # code...
      break;
  }


}
