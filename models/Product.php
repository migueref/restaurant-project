<?php
require_once 'Database.php';
class Product {
	public $nombre;

	public function __construct($nombre) {
      $this->nombre = $nombre;
  }

	public static function get()
	{
		$sql = "SELECT
							*
						FROM
							productos";
		$db = new Database();
		if ( $rows = $db->query($sql) ) {
			return $rows;
		}
		return false;
	}
	public static function delete($product_id)
	{
		$sql = "DELETE
						FROM
							productos
						WHERE
							id = $product_id
						";
		//echo $sql;
		$db = new Database();
		$db->query($sql);

	}


}
