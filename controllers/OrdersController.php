<?php
if( isset($_POST['operacion']) ) {
  require_once('../models/Order.php');

  switch ($_POST['operacion']) {
    case 'agregarPedido':
      $productos= json_decode($_POST['productos']);
      $pedido_id = Order::save();
      foreach ($productos as $producto) {
         $pedido_producto_id = Order::insertProductsToOrder($pedido_id, $producto->idProducto, $producto->cantidad);
      }

      break;

    default:
      # code...
      break;
  }


}
