<?php
	
	if($bandera_eliminarCliente ==1 || $bandera_eliminarCliente ==2)
	{
		require dirname(__FILE__).'/conexion/ObjetoConexion.php';//Se incluye el archivo que realiza la conexión a la BD
		require dirname(__FILE__).'/Consulta.php';
		$conexion = new Conexion();
		$objeto = new Consulta($conexion);
		
		switch($bandera_eliminarCliente)
		{
			case '1'://opción para eliminar un cliente
				$tabla = 'cliente';
				$id_columna = 'id_cliente';
				$delete = $objeto->delete($nombre[0], $tabla, $id_columna);
			break;
			case '2'://opción para eliminar un expediente
				$tabla = 'expediente_cliente_abogado';
				$id_columna = 'expediente';
				$delete = $objeto->delete($nombre[0], $tabla, $id_columna);
			break;
		}
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
