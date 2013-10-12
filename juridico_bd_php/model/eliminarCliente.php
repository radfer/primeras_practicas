<?php
	
	if($bandera_eliminarCliente ==1)
	{
		require 'conexion/ObjetoConexion.php';//Se incluye el archivo que realiza la conexión a la BD
		require 'Consulta.php';
		$conexion = new Conexion();
		$objeto = new Consulta($conexion);
		$delete = $objeto->delete($nombre[0]);//Se hace la consulta y se pasa el valor cargado por el usuario
		if($delete != 0)
		{
			$bandera_nominado = 1;//Se carga la bandera con un resultado positivo
		}else
		{
			$bandera_nominado = 0;//Se carga la bandera con un resultado negativo
		}
		
	}
		$objeto = NULL;//Se cierra el objeto
		$delete = NULL;//se cierra el prepare statement
		$conexion = NULL;//Se cierra la conexión a la BD
?>
