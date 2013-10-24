<?php
	if($bandera_carga_ultimo_prov == 1)
	{
		require dirname(__FILE__).'/conexion/ObjetoConexion.php';//Se incluye el archivo que realiza la conexión a la BD
		require dirname(__FILE__).'/Consulta.php';
	
		$bandera_insert = 0;//Se inicializa la bandera
		$conexion = new Conexion();
		$objeto = new Consulta($conexion);//Se crea el objeto para la consulta
		
		$insert = $objeto->insertUltimoProv($id_expediente[0], $proveido);//Se hace la consulta y se pasa el valor cargado por el usuario
		
		if($insert != FALSE)
		{
			$bandera_insert = 1;//Se carga la bandera con un resultado positivo
		}else
		{
			$bandera_insert = 0;//Se carga la bandera con un resultado negativo
		}
		
		$objeto = NULL;//Se cierra el objeto
		$insert = NULL;//se cierra el prepare statement
		$conexion = NULL;//Se cierra la conexión a la BD
	}
?>
