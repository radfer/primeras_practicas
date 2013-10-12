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
		
		public function select2()//función que realiza una consulta SELECT de los clientes de cada abogado
		{  //para ser eliminados
			$i = 0;                          
	
			if($consulta=$this->conexion->conexion->prepare('SELECT cli.id_cliente, cli.apellido, cli.nombre 
			FROM abogado AS dr INNER JOIN consulta_cliente_abogado AS consulta ON dr.id_abogado = 
			consulta.id_abogado INNER JOIN cliente AS cli ON cli.id_cliente = consulta.id_cliente'))
			{//Se hace la consulta
				$consulta->execute();//Se ejecuta la consulta
				while($resultado = $consulta->fetch(PDO::FETCH_ASSOC))
				{//Los resultados de la query se cargan en un arreglo asociativo
					$string = implode(' ', $resultado);
					$array[$i]= $string;
					$i++;
				}
				return $array;
			    //La función devuelve como resultado un arreglo asociativo con el contenido de lo devuelto por la consulta
			}else
			{
				return NULL;//En caso de fallar la consulta devuelve null
			}
		}
		
		public function select3($id)//función que realiza una consulta SELECT
		{//Se le pasa como argumento una variable que es el id del cliente
			try
			{
				$consulta=$this->conexion->conexion->prepare('SELECT *FROM cliente WHERE id_cliente = ? 
				LIMIT 1');//Se busca al cliente por el id
				//Se hace la consulta
				$consulta->bindParam(1,$id, PDO::PARAM_INT);//Se carga la query con el usuario ingresado por el usuario
				$consulta->execute();//Se ejecuta la consulta
				$resultado = $consulta->fetch(PDO::FETCH_ASSOC);//Los resultados de la query se cargan en un arreglo asociativo
				return $resultado;
				//La función devuelve como resultado un arreglo asociativo con el contenido de lo devuelto por la consulta
			}catch(PDOException $e)
			{
				return NULL;//En caso de fallar la consulta devuelve null
			}
		}
		
		
		public function insert($id, $apellido, $nombre, $dni, $dom_real, $telefono, $mail)
		{//Método que inserta un nuevo cliente a la base de datos
			try
			{
				$consulta=$this->conexion->conexion->prepare("INSERT INTO cliente (id_cliente, apellido, nombre, dni, 
				domicilio_real, telefono, mail) VALUES (?, ?, ?, ?, ?, ?, ?)");
				//Se hace la inserción
				$consulta->bindValue(1,$id, PDO::PARAM_INT);//Se carga la query con el usuario ingresado por el usuario
				$consulta->bindValue(2,$apellido, PDO::PARAM_STR);
				$consulta->bindValue(3,$nombre, PDO::PARAM_STR);
				$consulta->bindValue(4,$dni, PDO::PARAM_INT);
				$consulta->bindValue(5,$dom_real, PDO::PARAM_STR);
				$consulta->bindValue(6,$telefono, PDO::PARAM_STR);
				$consulta->bindValue(7,$mail, PDO::PARAM_STR);
				$consulta->execute();//Se ejecuta la consulta		
			}catch(PDOException $e)
			{
				return FALSE;
			}	
			return TRUE;
		}
		
		public function delete($id)//método que elimina un cliente de la BD
		{
			try
			{
				$consulta=$this->conexion->conexion->prepare('DELETE FROM cliente WHERE id_cliente = ?');
				//Se elimnina un cliente. Conexion->conexion hace referencia, el 1° al atributo publico del obj. conexion 
				//y el 2° al atributo de este obj. consulta.
				$consulta->bindValue(1,$id, PDO::PARAM_INT);
				$consulta->execute();//Se ejecuta la consulta	
			}catch(PDOException $e)
			{
				return 0;
			}	
			    return 1;
		}
		public function update($id, $apellido, $nombre, $dni, $dom_real, $telefono, $mail)
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
		
	}
?>
