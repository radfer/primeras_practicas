<?php
	if($bandera_select == 1)
	{
		require 'conexion/ObjetoConexion.php';//Se incluye el archivo que realiza la conexión a la BD
		require 'Consulta.php';
		
		$bandera_consulta = 0;//Se inicializa la bandera
		$conexion = new Conexion();
		$objeto = new Consulta($conexion);//Se crea el objeto para la consulta
		$consulta = $objeto->select($usuario);//Se hace la consulta y se pasa el valor cargado por el usuario
	
		if($consulta != NULL)
		{
			if((strcasecmp($consulta['mail'], $usuario))==0 && (strcasecmp($consulta['contrasenia'], $contrasenia)) ==0)
			{
				$bandera_consulta = 1;//Se carga la bandera con un resultado positivo
				$id_abogado = $consulta['id_abogado'];
			}else
			{
				$bandera_consulta = 0;//Se carga la bandera con un resultado negativo
				$mensaje_error = 'El usuario y/o la contraseña son incorrectos';//Se envía un msm de error
			}
		}else
		{
			$bandera_consulta = 0;
			$mensaje_error = 'Problemas al cargar el usuario';
		}
		$objeto = NULL;//Se cierra el objeto
		$consulta = NULL;//se cierra el prepare statement
		$conexion = NULL;//Se cierra la conexión a la BD
	}
?>
