<?php
	if($bandera_insert_expte == 1)
	{
		require dirname(__FILE__).'/conexion/ObjetoConexion.php';//Se incluye el archivo que realiza la conexión a la BD
		require dirname(__FILE__).'/Consulta.php';
	
		$bandera_insert = 0;//Se inicializa la bandera en falso
		$conexion = new Conexion();
		$objeto = new Consulta($conexion);//Se crea el objeto para la consulta
		
		$insert = $objeto->insertExpte($caratula, $num_expte, $anio, $juzgado, $tipo_de_parte, $abogado_contraparte,
		$nombre_contraparte, $domicilio_const_contraparte, $domicilio_real_contraparte, $circunscripcion);//Se hace la consulta y se pasa el valor cargado por el usuario
		
		if($insert != FALSE)
		{
			$bandera_insert = 1;//Se carga la bandera con un resultado positivo
		}

		
		$objeto = NULL;//Se cierra el objeto
		$insert = NULL;//se cierra el prepare statement
		$conexion = NULL;//Se cierra la conexión a la BD
	}
?>
