<?php

	class Consulta
	{
		private $conexion;//El atributo es el objeto conexión a la BD
		
		public function Consulta($con)//Constructor: Se le pasa una conexión
		{
			$this->conexion = $con;
		}
		
		
		public function select($variable)//función que realiza una consulta SELECT para loguear a los abogados
		{                                //Se le pasa como argumento una variable que es la condición de la consulta
			
			if($consulta=$this->conexion->conexion->prepare('SELECT *FROM abogado WHERE mail = ? LIMIT 1'))
			{//Se hace la consulta
				$consulta->bindParam(1,$variable, PDO::PARAM_INT);//Se carga la query con el usuario ingresado por el usuario
				$consulta->execute();//Se ejecuta la consulta
				return $consulta->fetch(PDO::FETCH_ASSOC);//Los resultados de la query se cargan en un arreglo asociativo
			    //La función devuelve como resultado un arreglo asociativo con el contenido de lo devuelto por la consulta
			}else
			{
				return NULL;//En caso de fallar la consulta devuelve null
			}
		}
		
		public function selectIdcliente($apellido, $nombre, $dni)//metodo para averiguar el id del cliente
		{//recien ingresado a la base
			try
			{
				$consulta=$this->conexion->conexion->prepare('SELECT id_cliente FROM cliente WHERE 
				apellido = ? AND nombre = ? AND dni = ?');
				$consulta->bindParam(1, $apellido, PDO::PARAM_STR);
				$consulta->bindParam(2, $nombre, PDO::PARAM_STR);
				$consulta->bindParam(3, $dni, PDO::PARAM_INT);
				$consulta->execute();
			}catch (PDOException $e)
			{
				return NULL;
			}
			return $consulta->fetch(PDO::FETCH_ASSOC); 
		}
		
		public function select2($bandera_query, $id_abogado)//función que realiza una consulta SELECT de los
		{  //clientes o expedientes para ser eliminados (extrae solo los que pertenezcan al abogado)
			$i = 0; //Indice para el arreglo que se obtiene como resultado  	
			switch($bandera_query)//Se determina en que tabla se va a buscar y que se debe buscar
			{
				case '1':                       
					$query = sprintf("SELECT cli.id_cliente, cli.apellido, cli.nombre FROM abogado
					AS dr INNER JOIN consulta AS cons ON dr.id_abogado = cons.abogado INNER JOIN 
					cliente AS cli ON cli.id_cliente = cons.cliente WHERE dr.id_abogado = %s 
					GROUP BY cli.id_cliente", $id_abogado);
				break;
				case '2':
					$query = sprintf("SELECT expte.id_expediente, expte.caratula FROM abogado
					AS dr INNER JOIN expediente_cliente_abogado AS relacion ON dr.id_abogado = relacion.abogado
				    INNER JOIN expediente AS expte ON expte.id_expediente = relacion.expediente 
				    WHERE dr.id_abogado = %s", $id_abogado);
				break;
			}
			
			try
			{
				$consulta=$this->conexion->conexion->prepare($query);
				//Se hace la consulta
				$consulta->execute();//Se ejecuta la consulta
				while($resultado = $consulta->fetch(PDO::FETCH_ASSOC))
				{//Los resultados de la query se cargan en un arreglo asociativo
					$string = implode(' ', $resultado);
					$array[$i]= $string;
					$i++;
				}
			}catch(PDOException $e)
			{
				echo $e;
				return NULL;//En caso de fallar la consulta devuelve null
			}
			return $array;
			//La función devuelve como resultado un arreglo con el contenido de lo devuelto por la consulta
		}
		
		public function select3($id, $bandera)//función que realiza una consulta SELECT
		{//Se le pasa como argumento una variable que es el id (del expte o del cliente) y la bandera
		//que define la tabla a utilizar
			switch($bandera)
			{
				case '1':
					$query = sprintf("SELECT *FROM cliente WHERE id_cliente = ?");//busca un cliente
				break;
				case '2': 
					$query = sprintf("SELECT *FROM expediente WHERE id_expediente = ?");//busca un expte
				break;
				case '3':
					$query = sprintf("SELECT *FROM abogado WHERE id_abogado = ?");//busca un abogado
				break;
			}
			try
			{
				$consulta=$this->conexion->conexion->prepare($query);//Se busca al cliente por el id
				//Se hace la consulta
				$consulta->bindParam(1,$id, PDO::PARAM_INT);//Se carga la query con el usuario ingresado por el usuario
				$consulta->execute();//Se ejecuta la consulta
				$resultado = $consulta->fetch(PDO::FETCH_ASSOC);//Los resultados de la query se cargan en un arreglo asociativo
				
			}catch(PDOException $e)
			{
				return NULL;//En caso de fallar la consulta devuelve null
			}
			
			return $resultado;
				//La función devuelve como resultado un arreglo asociativo con el contenido de lo devuelto por la consulta
		}
		
		
		
		public function insertCliente($apellido, $nombre, $dni, $dom_real, $telefono, $mail)
		{//Método que inserta un nuevo cliente a la base de datos
			try
			{
				$consulta=$this->conexion->conexion->prepare("INSERT INTO cliente (apellido, nombre, dni, 
				domicilio_real, telefono, mail) VALUES (?, ?, ?, ?, ?, ?)");
				//Se hace la inserción
				$consulta->bindValue(1,$apellido, PDO::PARAM_STR);
				$consulta->bindValue(2,$nombre, PDO::PARAM_STR);
				$consulta->bindValue(3,$dni, PDO::PARAM_INT);
				$consulta->bindValue(4,$dom_real, PDO::PARAM_STR);
				$consulta->bindValue(5,$telefono, PDO::PARAM_STR);
				$consulta->bindValue(6,$mail, PDO::PARAM_STR);
				$consulta->execute();//Se ejecuta la consulta	
			}catch(PDOException $e)
			{
				return FALSE;
			}	
			return TRUE;
		}
		
		public function insertExpte($caratula, $num_expte, $anio, $juzgado, $tipo_de_parte, $abogado_contraparte,
		$nombre_contraparte, $domicilio_const_contraparte, $domicilio_real_contraparte, $circunscripcion)
		{//Método que inserta un nuevo expediente a la base de datos
			try
			{
				$consulta=$this->conexion->conexion->prepare("INSERT INTO expediente (caratula, num_expte,
				anio, juzgado, tipo_de_parte, abogado_contraparte, nombre_contraparte, domicilio_const_contraparte,
				domicilio_real_contraparte, circunscripcion) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
				//Se hace la inserción
				$consulta->bindValue(1,$caratula, PDO::PARAM_STR);//Se carga la query con el usuario ingresado por el usuario
				$consulta->bindValue(2,$num_expte, PDO::PARAM_INT);
				$consulta->bindValue(3,$anio, PDO::PARAM_INT);
				$consulta->bindValue(4,$juzgado, PDO::PARAM_STR);
				$consulta->bindValue(5,$tipo_de_parte, PDO::PARAM_STR);
				$consulta->bindValue(6,$abogado_contraparte, PDO::PARAM_STR);
				$consulta->bindValue(7,$nombre_contraparte, PDO::PARAM_STR);
				$consulta->bindValue(8,$domicilio_const_contraparte, PDO::PARAM_STR);
				$consulta->bindValue(9,$domicilio_real_contraparte, PDO::PARAM_STR);
				$consulta->bindValue(10,$circunscripcion, PDO::PARAM_STR);
				$consulta->execute();//Se ejecuta la consulta		
			}catch(PDOException $e)
			{
				return FALSE;
			}	
			return TRUE;
		}
		
		public function insertUltimoProv($id_expte, $descripcion)
		{//Método que inserta un nuevo expediente a la base de datos
			try
			{
				$consulta=$this->conexion->conexion->prepare("INSERT INTO ultimo_prov (id_expediente,
				ultimo_movimiento) VALUES (?, ?)");
				//Se hace la inserción
				$consulta->bindValue(1,$id_expte, PDO::PARAM_INT);//Se carga la query con el usuario ingresado por el usuario
				$consulta->bindValue(2,$descripcion, PDO::PARAM_STR);
				$consulta->execute();//Se ejecuta la consulta		
			}catch(PDOException $e)
			{
				return FALSE;
			}	
			return TRUE;
		}
		
		public function insertConsulta($id_cliente, $id_abogado, $descripcion)
		{//Método que inserta un nuevo expediente a la base de datos
			try
			{
				$consulta=$this->conexion->conexion->prepare("INSERT INTO consulta (cliente, abogado,
				descripcion) VALUES (?, ?, ?)");
				//Se hace la inserción
				$consulta->bindValue(1,$id_cliente, PDO::PARAM_INT);//Se carga la query con el usuario ingresado por el usuario
				$consulta->bindValue(2,$id_abogado, PDO::PARAM_INT);
				$consulta->bindValue(3,$descripcion, PDO::PARAM_STR);
				$consulta->execute();//Se ejecuta la consulta		
			}catch(PDOException $e)
			{
				return FALSE;
			}	
			return TRUE;
		}
		
		public function delete($id, $tabla, $id_columna)//método que elimina un elemento de la BD
		{/*con el parámetro $id se pasa pa PK del registro a borrar
		   *con el parámetro $tabla, se identifica la tabla en donde se encuentra el registro
		   *con el parámetro $id_columna se determina el nombre de la columna de id de la tabla para comparar*/ 
			try
			{
				$query = sprintf("DELETE FROM %s WHERE %s = %s", $tabla, $id_columna, $id);
				//Se prepara la query pertinente, de acuerdo a la tabla en la que se quiere trabajar
				$consulta=$this->conexion->conexion->prepare($query);
				//Se elimnina un cliente. Conexion->conexion hace referencia, el 1° al atributo publico del obj. conexion 
				//y el 2° al atributo de este obj. consulta.
				//$consulta->bindValue(1,$id, PDO::PARAM_INT);
				$consulta->execute();//Se ejecuta la consulta	
			}catch(PDOException $e)
			{
				return 0;
			}	
			    return 1;
		}
		
		public function updateCliente($id, $apellido, $nombre, $dni, $dom_real, $telefono, $mail)
		{
			try
			{
				$consulta=$this->conexion->conexion->prepare("UPDATE cliente SET apellido = ?, nombre = ?, 
				dni = ?, domicilio_real = ?, telefono = ?, mail = ? WHERE id_cliente = ?");
				//Se hace la inserción
				$consulta->bindValue(1,$apellido, PDO::PARAM_STR);
				$consulta->bindValue(2,$nombre, PDO::PARAM_STR);
				$consulta->bindValue(3,$dni, PDO::PARAM_INT);
				$consulta->bindValue(4,$dom_real, PDO::PARAM_STR);
				$consulta->bindValue(5,$telefono, PDO::PARAM_STR);
				$consulta->bindValue(6,$mail, PDO::PARAM_STR);
				$consulta->bindValue(7,$id, PDO::PARAM_INT);
				$consulta->execute();//Se ejecuta la consulta		
			}catch(PDOException $e)
			{
				return FALSE;
			}	
			return TRUE;
		}
		
		public function updateExpte($id, $caratula, $num_expte, $anio, $juzgado, $parte, $drContraparte, 
		                             $nom_contraparte, $dom_const, $dom_real, $circunscripcion)
		{//Método que actualiza los datos de un expte.
			try
			{
				$consulta=$this->conexion->conexion->prepare("UPDATE expediente SET caratula = ?, num_expte = ?, 
				anio = ?, juzgado = ?, tipo_de_parte = ?, abogado_contraparte = ?, 
				nombre_contraparte = ?, domicilio_const_contraparte = ?, domicilio_real_contraparte = ?,
				circunscripcion = ? WHERE id_expediente = ?");
				//Se hace la inserción
				$consulta->bindValue(1,$caratula, PDO::PARAM_STR);
				$consulta->bindValue(2,$num_expte, PDO::PARAM_INT);
				$consulta->bindValue(3,$anio, PDO::PARAM_INT);
				$consulta->bindValue(4,$juzgado, PDO::PARAM_STR);
				$consulta->bindValue(5,$parte, PDO::PARAM_STR);
				$consulta->bindValue(6,$drContraparte, PDO::PARAM_STR);
				$consulta->bindValue(7,$nom_contraparte, PDO::PARAM_STR);
				$consulta->bindValue(8,$dom_const, PDO::PARAM_STR);
				$consulta->bindValue(9,$dom_real, PDO::PARAM_STR);
				$consulta->bindValue(10,$circunscripcion, PDO::PARAM_STR);
				$consulta->bindValue(11,$id, PDO::PARAM_STR);
				$consulta->execute();//Se ejecuta la consulta		
			}catch(PDOException $e)
			{
				return FALSE;
			}	
			return TRUE;
		}
		
		public function updateAbogado($id_abogado, $telefono, $mail, $contrasenia)
		{
			try
			{
				$consulta=$this->conexion->conexion->prepare("UPDATE abogado SET telefono = ?, mail = ?, 
				contrasenia = ? WHERE id_abogado = ?");
				//Se hace la inserción
				$consulta->bindValue(1,$telefono, PDO::PARAM_STR);
				$consulta->bindValue(2,$mail, PDO::PARAM_STR);
				$consulta->bindValue(3,$contrasenia, PDO::PARAM_STR);
				$consulta->bindValue(4,$id_abogado, PDO::PARAM_INT);
				$consulta->execute();//Se ejecuta la consulta		
			}catch(PDOException $e)
			{
				return FALSE;
			}	
			return TRUE;
		}

	}
?>
