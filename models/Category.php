<?php
require_once 'Database.php';
class Category {
	public $nombre;
	public $descripcion;

	public function __construct($nombre, $descripcion)
	{
		$this->nombre = $nombre;
    $this->descripcion = $descripcion;
  }

	public static function get()
	{
		$sql = "SELECT
							*
						FROM
							categorias";
		$db = new Database();
		if ( $rows = $db->query($sql) ) {
			return $rows;
		}
		return false;
	}

	public function save()
	{
		//guardar mi categoria
		$sql = "INSERT INTO
							categorias(nombre, descripcion)
						VALUES (
							'".$this->nombre."',
							'".$this->descripcion."'
						)
					 ";
		//echo $sql;
		$db = new Database();
		$db->query($sql);
	}


}
