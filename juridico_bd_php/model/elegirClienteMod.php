<?php

	if($bandera_elegirCliente ==1)
	{
		require 'conexion/ObjetoConexion.php';//Se incluye el archivo que realiza la conexión a la BD
		require 'Consulta.php';
		$conexion = new Conexion();
		$objeto = new Consulta($conexion);
		$cliente = $objeto->select3($nombre[0]);//Se hace la consulta y se pasa el valor cargado por el usuario
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
