<?php

	if($bandera_modCliente==1)
	{
		require 'conexion/ObjetoConexion.php';//Se incluye el archivo que realiza la conexión a la BD
		require 'Consulta.php';
		
		$conexion = new Conexion();
		$objeto = new Consulta($conexion);

			$mod = $objeto->update($id1, $apellido1, $nombre1, $dni1, $dom_real1, $telefono1, $mail1);
			if($mod != FALSE)
			{
				$bandera_resMod =1;
			}else
			{
				$bandera_resMod = 0;
			}
			
	}
	$conexion = NULL;
	$objeto = NULL;

?>
