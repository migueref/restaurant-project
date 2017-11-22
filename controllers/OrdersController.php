<?php
if( isset($_POST['operacion']) ) {
  require_once('../models/Order.php');

  switch ($_POST['operacion']) {
    case 'agregarPedido':

      $productos= json_decode($_POST['productos']);
      $pedido_id = Order::save();
      echo $pedido_id;
      foreach ($productos as $producto) {
        echo $producto->cantidad;
        echo $producto->idProducto;
        PedidoProducto::save($pedido_id, $producto->idProducto, $producto->cantidad);
      }

      break;

    default:
      # code...
      break;
  }


}
