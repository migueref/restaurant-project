<?php
if (isset($_POST['operacion'])) {
  include_once("../models/Product.php");
  $product_id = $_POST['idProducto'];
  Product::delete($product_id);
  header('Location: ../index.php');

} else {
  include_once("models/Product.php");
  $productos = Product::get();
}
