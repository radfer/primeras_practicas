<?php
	class Conexion//Clase que administrará la conexión
	{
		public $conexion;
		
		public function Conexion()
		{
			try
			{
				require dirname(__FILE__).'/password.php';//archivo donde se encuentran los usuarios y las claves de la BD
				$this->conexion = new PDO($host, $user, $password1, array(PDO::ATTR_EMULATE_PREPARES=>false, PDO::ATTR_ERRMODE
				=>PDO::ERRMODE_EXCEPTION));//el último arreglo se pone para que el prepared statement lance
										//el error, ya que por defecto el lenguaje los ignora.
			}catch(PDOException $e)
			{
				die("Error de conexion: ".$e->getMessage());
			}
		}
	}
?>
