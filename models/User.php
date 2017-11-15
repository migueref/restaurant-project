<?php
require_once 'Database.php';
class User {
	public $nombre;
	public $descripcion;

	public function __construct($nombre, $descripcion)
	{
		$this->nombre = $nombre;
    $this->descripcion = $descripcion;
  }

	public static function login($email,$password)
	{
		$sql = "SELECT
							*
						FROM
							usuarios
						WHERE
							email = '".$email."'
							AND password = SHA2('".$password."',256)
							";


		$db = new Database();
		if ( $rows = $db->query($sql) ) {
			session_start();
			$_SESSION['is_logged_in'] = true;
			$_SESSION['user_data'] = array(
																	'id' => $rows['0']['id'],
																	'nombre' => $rows['0']['nombre'],
																	'email' => $rows['0']['email']
																);

			return true;
		}
		return false;
	}


}
