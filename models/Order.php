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


}
