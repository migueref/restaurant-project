<?php
require_once 'Database.php';
class Customer {
	public $nombre;
  public $direccion;
	public $telefono;


	public function __construct($nombre, $direccion, $telefono)
	{
		$this->nombre = $nombre;
    $this->direccion = $direccion;
    $this->telefono = $telefono;
  }

	public static function get()
	{
		$sql = "SELECT
							*
						FROM
							clientes";
		$db = new Database();
		if ( $rows = $db->query($sql) ) {
			return $rows;
		}
		return false;
	}
  public function save()
  {
    $sql = "INSERT INTO
              clientes(nombre, direccion, telefono)
            VALUES(
              '".$this->nombre."',
              '".$this->direccion."',
              '".$this->telefono."'
            )";
    $db = new Database();
    $db->query($sql);
    return true;
  }
}
