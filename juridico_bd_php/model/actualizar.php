<?php

	if($bandera_modCliente==1 || $bandera_modCliente == 2 || $bandera_modCliente == 3)
	{
		require dirname(__FILE__).'/conexion/ObjetoConexion.php';//Se incluye el archivo que realiza la conexión a la BD
		require dirname(__FILE__).'/Consulta.php';
		
		$conexion = new Conexion();
		$objeto = new Consulta($conexion);
		
		switch($bandera_modCliente)
		{
			case '1'://La bandera indica que lo que tiene que modificar, son los datos de un cliente
				$mod = $objeto->updateCliente($id1, $apellido1, $nombre1, $dni1, 
				$dom_real1, $telefono1, $mail1);
			break;
			case '2'://la bandera indica que lo que se tiene que modificar, son los datos de un expte.
				$mod = $objeto->updateExpte($id_expediente, $caratula, $num_expte, $anio, $juzgado,
				$tipo_de_parte, $abogado_contraparte, $nombre_contraparte, $domicilio_const_contraparte,
				$domicilio_real_contraparte, $circunscripcion);
			break;
			case '3'://Indica que lo que se tiene que modificar es el registro de un abogado
				$id_abogado = $_SESSION['id_abogado'];
				$mod = $objeto->updateAbogado($id_abogado, $telefono, $mail, $contrasenia);
			break;
		}
			
			if($mod != FALSE)
			{
				$bandera_resMod =1;
			}else
			{
				$bandera_resMod = 0;
			}
	}
	$conexion = NULL;
	$objeto = NULL;

?>
