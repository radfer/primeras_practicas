<?php
	if($bandera_insertBD == 1)
	{
		require 'conexion/ObjetoConexion.php';//Se incluye el archivo que realiza la conexión a la BD
		require 'Consulta.php';
	
		$bandera_insert = 0;//Se inicializa la bandera
		$conexion = new Conexion();
		$objeto = new Consulta($conexion);//Se crea el objeto para la consulta
		
		$insert = $objeto->insertCliente($apellido, $nombre, $dni, $dom_real, $telefono, $mail);//Se hace la consulta y se pasa el valor cargado por el usuario
		$id_cliente = $objeto->selectIdcliente($apellido, $nombre, $dni);//Se extrae el id del nuevo cliente
		//ingresado a la base de datos
		$id_abog = $_SESSION['id_abogado'];
		$resultado = $objeto->insertConsulta($id_cliente['id_cliente'], $id_abog, NULL);
		//con InsertConsulta se vincula al nuevo cliente con el abogado. Atento a que solo se utiliza la
		//función para establecer una relación, en la parte de descripcion se pone nulo el campo
		if($insert != FALSE && $resultado != FALSE)
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
