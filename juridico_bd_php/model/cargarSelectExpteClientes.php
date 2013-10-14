<?php
	
	if($bandera_baja_expte ==1 || $bandera_baja_expte ==2)
	{	
		if($incluir !=1)//Verifica si se debe realizar una conexión o no
		{
			require 'conexion/ObjetoConexion.php';//Se incluye el archivo que realiza la conexión a la BD
			require 'Consulta.php';
		}
		$conexion = new Conexion();
	
		$objeto = new Consulta($conexion);
		
		switch($bandera_baja_expte)
		{
			case '1':
				$lista_clientes = $objeto->select2(2, $_SESSION['id_abogado']);	
			break;
			case '2':
				$lista_clientes = $objeto->select2(1, $_SESSION['id_abogado']);	
			break;
		}
	}
	
	$objeto = NULL;
	$conexion = NULL;

?>
