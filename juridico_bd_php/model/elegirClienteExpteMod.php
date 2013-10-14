<?php

	if($bandera_elegirCliente ==1 || $bandera_elegirCliente == 2 || $bandera_elegirCliente ==3)
	{
		require 'conexion/ObjetoConexion.php';//Se incluye el archivo que realiza la conexión a la BD
		require 'Consulta.php';
		$conexion = new Conexion();
		$objeto = new Consulta($conexion);
		
		switch($bandera_elegirCliente)//De acuerdo a la bandera hará la consulta correspodiente
		{
			case '1':
				$cliente = $objeto->select3($nombre[0], 1);//Se hace la consulta por un cliente
			break;
			case '2':
				$cliente = $objeto->select3($nombre[0], 2);//Se hace la consulta por un expte
			break;
			case '3':
				$id_abogado = $_SESSION['id_abogado'];
				$cliente = $objeto->select3($id_abogado, 3);
			break;
		}
		if($cliente != NULL)
		{
			$bandera_cliente = 1;//Se carga la bandera con un resultado positivo
		}else
		{
			$bandera_cliente = 0;//Se carga la bandera con un resultado negativo
		}	
	}		
		$objeto = NULL;//Se cierra el objeto
		$conexion = NULL;//Se cierra la conexión a la BD
?>
