<?php
	
	if($bandera_baja_cli ==1)
	{	
		if($incluir !=1)//Verifica si se debe realizar una conexión o no
		{
			require 'conexion/ObjetoConexion.php';//Se incluye el archivo que realiza la conexión a la BD
			require 'Consulta.php';
		}
		$conexion = new Conexion();
	
		$objeto = new Consulta($conexion);
		
		$lista_clientes = $objeto->select2();	
		
	}
	
	$objeto = NULL;
	$conexion = NULL;

?>
