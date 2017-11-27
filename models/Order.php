<?php
require_once 'Database.php';
class Order {
	public $fecha;
	public $cliente;
	public $estado;

	public function __construct() {

  }


	public static function save()
	{
		session_start();
		$user_id= $_SESSION['user_data']['id'];
		$sql = "INSERT INTO
							pedidos
							(fecha,cliente_id, estado)
						VALUES(
							NOW(),
							$user_id,
							'pendiente'
						)
						";
		//echo $sql;
		$db = new Database();
		$db->query($sql);
		$lastId = (int) $db->mysqli->insert_id;

		return $lastId;

	}
	public static function insertProductsToOrder($pedido_id,$producto_id,$cantidad)
	{
		$sql = "INSERT INTO
							pedido_producto
							(pedido_id,producto_id, cantidad)
						VALUES(
							$pedido_id,
							$producto_id,
							$cantidad
						)
						";
		//echo $sql;
		$db = new Database();
		$db->query($sql);
		$lastId = (int) $db->mysqli->insert_id;

		return $lastId;

	}


}
