<?php
	session_start();//inicio una sesión. En el arreglo de la misma se guardará el id del abogado logueado
	require dirname(__FILE__).'/../comodin.php';
	//require '../model/conexion/instanciarConexion.php';
	$bandera_cliente = 1; //bandera para entrada al archivo que carga el array de clientes
	$mensaje_error = ' ';//Se inicializa el mensaje de error
	$response = $_SERVER['REQUEST_METHOD'];//Se carga el método en una variable
	switch($response)//Aqui se evalúa que tipo de peticiones se realizan en cada vista
	{
		case 'POST'://se verifica que sea POST
			$clave = key($_POST);//con la llave del arreglo se identifica de que página viene el post
			switch($clave)
			{
				case 'usuario'://Se está ingresando por la página de inicio
					$usuario = $_POST['usuario'];//Se carga el usario ingresado
					$_SESSION['usuario']= $usuario;
					$contrasenia= $_POST['contrasenia'];//se carga la contraseña ingresada
					if(!empty($usuario) && !empty($contrasenia))//Se verifica que se hayan ingresado valores efectivamente
					{
						$bandera_select=1;//bandera para entrar a la página
						include dirname(__FILE__).'/../model/consultaSelectBD.php';//se ejecuta el archivo que consultará a la BD
						if($bandera_consulta == 1)//Si se vuelve del script con resultado positivo
						{
							$bandera_menu = 1;//Se inicializa la bandera de entrada
							include dirname(__FILE__).'/../view/menu.php';//Se ejecuta la vista para el usuario logueado
						}else//en caso contrario se reenvía al usuario al formulario de inicio
						{
							$bandera_vista1 = 1;
							include dirname(__FILE__).'/../view/vista1.php';
						}
					}else
					{
						$bandera_vista1 = 1;
						$mensaje_error = 'No se ha ingresado un usuario y/o contraseña';
						include dirname(__FILE__).'/../view/vista1.php';
					}
				break;
				case 'nombre_alta'://Viene de la view alta_cli.php
					$nombre = $_POST['nombre_alta'];
					$apellido = $_POST['apellido_alta'];//Se carga lo ingresado por el usuario
					$dni = $_POST['dni_alta'];
					$dom_real = $_POST['domicilio_real'];
					$telefono = $_POST['telefono'];
					$mail = $_POST['mail'];
					if(!empty($nombre)&&!empty($apellido)&&!empty($dni)&&!empty($dom_real)
					&&!empty($telefono))//Controla que los datos que no pueden ser nulos hayan sido ingresados
					{
						$bandera_insertBD = 1;
						include dirname(__FILE__).'/../model/IngresoInsertBD.php';//Se ingresa a la BD
						if($bandera_insert == 1)//Avisa si el ingreso fue exitoso o falló
						{
							$mensaje_error = 'El ingreso fue exitoso';
						}else
						{
							$mensaje_error = 'El ingreso ha fallado, intente nuevamente';
						}
						$bandera_alta_cli = 1;
						include dirname(__FILE__).'/../view/alta_cli.php';
					}else
					{
						$mensaje_error = 'Alguno de los campos está incompleto';//En caso de que el usuario
						$bandera_alta_cli = 1;//no haya ingresado algún cambio, avisa
						include dirname(__FILE__).'/../view/alta_cli.php';
					}						
				break;
				case 'clientes'://viene de la página de baja de un cliente
					$nominado = $_POST['clientes'];//Se carga el cliente seleccionado por el usuario
					$bandera_eliminarCliente = 1;//Se inicializa la bandera para entrar a la página
					$nombre = explode(' ', $nominado);//Se transforma el string a un arreglo de tres elementos (apellido y nombre)
					include dirname(__FILE__).'/../model/eliminarClienteExpte.php';//Se ejecuta el archivo para eliminar
					$bandera_baja_expte = 2;
					$bandera_baja_cli = 1;
					if($bandera_nominado == 1)//Si da un resultado positivo se avisa
					{
						$mensaje_error = 'El registro se eliminó exitosamente';
					}else
					{
						$mensaje_error = 'No se ha podido eliminar el registro';//en caso contrario, se avisa que no sucedió
					}
					$incluir = 1;
					include dirname(__FILE__).'/../model/cargarSelectExpteClientes.php';
					include dirname(__FILE__).'/../view/baja_cli.php';
				break;
				case 'clientes2'://viene de la vista para modifica los datos de un cliente
					$nominado2 = $_POST['clientes2'];//Se carga el cliente seleccionado por el usuario
					$bandera_elegirCliente = 1;//Se inicializa la bandera para entrar a la página
					$nombre = explode(' ', $nominado2);//Se transforma el string a un arreglo de dos elementos (apellido y nombre)
					include dirname(__FILE__).'/../model/elegirClienteExpteMod.php';//Se ejecuta el archivo para buscar el cliente elegido
					$bandera_mod = 1;
					if($bandera_cliente == 1)//Si da un resultado positivo se avisa
					{
						$bandera_mod2 = 1;//Bandera para entrar a la vista modificacion_cli2
						include dirname(__FILE__).'/../view/modificacion_cli2.php';
					}else
					{
						$mensaje_error = 'No se ha modificar el registro';//en caso contrario, se avisa que no sucedió
					}
					include dirname(__FILE__).'/../view/modificacion.php';
				break;
				case 'nombre_mod'://viene de la pagina modificacion_cli2
					$id1= $_POST['id_mod'];
					$nombre1 = $_POST['nombre_mod'];
					$apellido1 = $_POST['apellido_mod'];
					$dni1 = $_POST['dni_mod'];
					$dom_real1 = $_POST['domicilio_mod'];
					$telefono1 = $_POST['tel_mod'];
					$mail1 = $_POST['mail_mod'];
					if(!empty($id1)&&!empty($nombre1)&&!empty($apellido1)&&!empty($dni1)&&!empty($dom_real1)
					&&!empty($telefono1))	
					{
						$bandera_modCliente=1;
						include dirname(__FILE__).'/../model/actualizar.php';
						$bandera_mod = 1;
						if($bandera_resMod == 1)//Si da un resultado positivo se avisa
						{
							$mensaje_error = 'El registro se ha modificado';
						}else
						{							
							$mensaje_error = 'No se ha podido modificar el registro';//en caso contrario, se avisa que no sucedió
						}
						$bandera_mod2 = 1;
						$bandera_baja_expte = 2;
						$incluir = 1;
						include dirname(__FILE__).'/../model/cargarSelectExpteClientes.php';
						include dirname(__FILE__).'/../view/modificacion_cli.php';
						include dirname(__FILE__).'/../view/modificacion_cli2.php';
					}else
					{
						$mensaje_error2 = 'Alguno de los campos está vacío';
						$bandera_mod = 1;
						include dirname(__FILE__).'/../model/cargarSelectExpteClientes.php';
						include dirname(__FILE__).'/../view/modificacion_cli.php';
					}		
				break;
				case 'caratula_alta'://viene de la vista alta_expte
				$caratula= $_POST['caratula_alta'];
			    $num_expte= $_POST['numExpte_alta'];
			    $anio= $_POST['anio_alta'];
			    $juzgado= $_POST['juzgado_alta'];
			    $tipo_de_parte= $_POST['tipoParte_alta']; //Se guarda lo cargado por el usuario
			    $abogado_contraparte= $_POST['abogadoContraparte_alta'];
		        $nombre_contraparte= $_POST['nombreContraparte_alta'];
		        $domicilio_const_contraparte= $_POST['domConstContraparte_alta'];
		        $domicilio_real_contraparte= $_POST['domRealContraparte_alta'];
		        $circunscripcion= $_POST['circunscripcion_alta'];
		        $idCliente= $_POST['cliente_expte'];
		        if(!empty($caratula)&&!empty($num_expte)&&!empty($anio)&&!empty($juzgado)
					&&!empty($tipo_de_parte)&&!empty($nombre_contraparte))//Controla que los datos que no pueden ser nulos hayan sido ingresados
					{
						$bandera_insert_expte = 1;
						include dirname(__FILE__).'/../model/insertExpte.php';//Se ingresa a la BD
						if($bandera_insert == 1)//Avisa si el ingreso fue exitoso o falló
						{
							$mensaje_error = 'El ingreso fue exitoso';
						}else
						{
							$mensaje_error = 'El ingreso ha fallado, intente nuevamente';
						}
						$bandera_alta_expte = 1;//Se setea la bandera para entrar a la vista
						include dirname(__FILE__).'/../view/alta_expte.php';
					}else
					{
						$mensaje_error = 'Alguno de los campos está incompleto';//En caso de que el usuario
						$bandera_alta_expte = 1;//no haya ingresado algún cambio, avisa
						$bandera_baja_cli = 1;//Se inicializa la bandera para hacer el select de clientes
						$bandera_query = 0;//Permite una query que muestre en el Select, todos los clientes del estudio
						include dirname(__FILE__).'/../model/cargarSelectCliente.php';
						include dirname(__FILE__).'/../view/alta_expte.php';
					}
				break;	
				case 'expediente'://Viene de la vista "modificacion_expte"
					$nominado2 = $_POST['expediente'];//Se carga el expediente seleccionado por el usuario
					$bandera_elegirCliente = 2;//Se inicializa la bandera para entrar a la página 'elegirClienteExpteMod'
					$nombre = explode(' ', $nominado2);//Se transforma el string a un arreglo
					include dirname(__FILE__).'/../model/elegirClienteExpteMod.php';//Se ejecuta el archivo para buscar el expte elegido
					$bandera_mod_expte2 = 1;//Se inicializa la bandera para entrar a la vista donde está el formulario para modificar
					if($bandera_cliente == 1)//Si da un resultado positivo se avisa
					{
						$bandera_mod_expte2 = 1;//Bandera para entrar a la vista modificacion_expte2
						$bandera_baja_expte = 1;//bandera para entra a cargarSelectExpteClientes
						$incluir = 1;//bandera que evita que se pisen las conexiones a la base de datos
						include dirname(__FILE__).'/../model/cargarSelectExpteClientes.php';
						include dirname(__FILE__).'/../view/modificacion_expte.php';
						include dirname(__FILE__).'/../view/modificacion_expte2.php';
					}else
					{
						$mensaje_error = 'No se ha modificar el registro';//en caso contrario, se avisa que no sucedió
					}
					include dirname(__FILE__).'/../view/modificacion_expte.php';
				break;	
				case 'caratula'://Viene de la vista "modificacion_expte2"
					$id_expediente = $_POST['id_expediente'];
					$caratula= $_POST['caratula'];
					$num_expte = $_POST['num_expte'];
					$anio = $_POST['anio'];
					$juzgado = $_POST['juzgado'];
					$tipo_de_parte = $_POST['tipo_de_parte'];
					$abogado_contraparte = $_POST['abogado_contraparte'];
					$nombre_contraparte = $_POST['nombre_contraparte'];
					$domicilio_const_contraparte = $_POST['domicilio_const_contraparte'];
					$domicilio_real_contraparte = $_POST['domicilio_real_contraparte'];
					$circunscripcion = $_POST['circunscripcion'];
					if(!empty($caratula)&&!empty($num_expte)&&!empty($anio)&&!empty($juzgado)
					&&!empty($tipo_de_parte)&&!empty($nombre_contraparte)&&!empty($nombre_contraparte))	
					{
						$bandera_modCliente=2;
						include dirname(__FILE__).'/../model/actualizar.php';
						$bandera_mod_expte = 1;
						if($bandera_resMod == 1)//Si da un resultado positivo se avisa
						{
							$mensaje_error = 'El registro se ha modificado';
						}else
						{							
							$mensaje_error = 'No se ha podido modificar el registro';//en caso contrario, se avisa que no sucedió
						}
						$bandera_mod_expte2 = 1;
						$bandera_baja_expte = 1;
						$incluir = 1;
						include dirname(__FILE__).'/../model/cargarSelectExpteClientes.php';
						include dirname(__FILE__).'/../view/modificacion_expte.php';
						include dirname(__FILE__).'/../view/modificacion_expte2.php';
					}else
					{
						$mensaje_error2 = 'Alguno de los campos está vacío';
						$bandera_mod = 1;
						include dirname(__FILE__).'/../model/cargarSelectExpteClientes.php';
						include dirname(__FILE__).'/../view/modificacion_cli.php';
					}		
				
				break;	
				case 'eliminar_expte'://Viene de la vista 'baja_expte'
					$nominado = $_POST['eliminar_expte'];
					$nombre = explode(' ', $nominado);//Se transforma el string a un arreglo 					include '../model/eliminarClienteExpte.php';//Se ejecuta el archivo para eliminar
					$bandera_eliminarCliente = 2;//Se inicializa la bandera para identificar que se 
					//quiere eliminar un expte.
					include dirname(__FILE__).'/../model/eliminarClienteExpte.php';
					if($bandera_nominado == 1)//Si da un resultado positivo se avisa
					{
						$mensaje_error = 'El registro se eliminó exitosamente';
					}else
					{
						$mensaje_error = 'No se ha podido eliminar el registro';//en caso contrario, se avisa que no sucedió
					}
					$bandera_baja_cli = 1;
					$bandera_baja_expte = 1;
					$incluir = 1;
					include dirname(__FILE__).'/../model/cargarSelectExpteClientes.php';
					include dirname(__FILE__).'/../view/baja_expte.php';
				break;
				case 'ultimo_mov'://viene de la vista alta_ultimo_prov
					$id_expte = $_POST['ultimo_mov'];
					$proveido = $_POST['detalle_prov'];
					$id_expediente = explode(' ', $id_expte);//Se transforma el string a un arreglo
					$bandera_carga_ultimo_prov = 1;//Se inicializa la bandera
					include dirname(__FILE__).'/../model/carga_ultimo_prov.php';
					if($bandera_insert == 1)//Avisa si el ingreso fue exitoso o falló
						{
							$mensaje_error = 'El ingreso fue exitoso';
						}else
						{
							$mensaje_error = 'El ingreso ha fallado, intente nuevamente';
						}
					$bandera_alta_prov = 1;//Se inicializa la bandera para entrar a la vista
					$bandera_baja_expte= 1;//Se inica la bandera para entrar a cargarSelectCliente
					$incluir = 1;
					include dirname(__FILE__).'/../model/cargarSelectExpteClientes.php';
					include dirname(__FILE__).'/../view/alta_ultimo_prov.php';
				break;
				case 'ultima_consulta':
					$cliente = $_POST['ultima_consulta'];
					$consulta = $_POST['detalle_consulta'];
					$id_cliente = explode(' ', $cliente);//Se transforma el string a un arreglo
					$bandera_carga_consulta = 1;//Se inicializa la bandera
					include dirname(__FILE__).'/../model/carga_consulta.php';
					if($bandera_insert == 1)//Avisa si el ingreso fue exitoso o falló
						{
							$mensaje_error = 'El ingreso fue exitoso';
						}else
						{
							$mensaje_error = 'El ingreso ha fallado, intente nuevamente';
						}
					$bandera_alta_consulta = 1;//se inicializa la bandera para entrar a la vista
					$bandera_baja_expte = 2;//Bandera para que el select de la vista se cargue con clientes
					$incluir = 1;
					include dirname(__FILE__).'/../model/cargarSelectExpteClientes.php';
					include dirname(__FILE__).'/../view/alta_consulta.php';
				break;
				case 'tel_abogado'://Viene de la vista 'modificacion_abogado'
					$telefono = $_POST['tel_abogado'];
					$mail = $_POST['mail_abogado'];
					$contrasenia = $_POST['contrasenia_abogado'];
					$id = $_POST['id_abogado'];
					$bandera_modCliente = 3;//bandera para identificar que se quiere actualizar el registro
					//de un abogado
					include dirname(__FILE__).'/../model/actualizar.php';
					if($bandera_resMod == 1)
					{
						$mensaje_error = 'El registro fue modificado exitosamente';
					}else
					{
						$mensaje_error = 'Ha fallado la modificación del registro. Intente nuevamente';
					}
					$bandera_modificacion_abogado = 1;//Bandera para entrar a la vista
					include dirname(__FILE__).'/../view/modificacion_abogado.php';
				break;
				case 'juzgado'://Esta consulta va a extraer la información de un archivo json
					$valor = $_POST['juzgado'];//Viene el Juz. del que el usuario quiere obtener información
					$id_juzgado = explode(' ', $valor);
					include dirname(__FILE__).'/../model/determinarJuzgado.php';
					if($bandera_juzgado ==1)
					{
						$hola = $val1;
						$hola2 = $val2;
						$hola3 = $val3;
						$hola4 = $val4;
						$hola5 = $val5;
					}else
					{
						$hola = ' ';
						$hola2 = ' ';
						$hola3 = ' ';
						$hola4 = ' ';
						$hola5 = ' ';
					}
					
					include dirname(__FILE__).'/../view/circunscripcion.php';

					
				break; 
				
				default:				
			}
		break;
		case 'GET'://Se evalúa todo lo que venga por GET
			$menu = key($_GET);
			switch($menu)
			{
				case 'alta_cli':
					$bandera_alta_cli = 1;
					include dirname(__FILE__).'/../view/alta_cli.php';
					break;
				case 'baja_cli':
					$bandera_baja_expte = 2;
					$bandera_baja_cli = 1;
					include dirname(__FILE__).'/../model/cargarSelectExpteClientes.php';
					include dirname(__FILE__).'/../view/baja_cli.php';
					break;
				case 'modificar_cli':
					$bandera_mod = 1;//Se setea la bandera para entrar a modificacion_cli
					$bandera_baja_expte= 2;//Se inica la bandera para entrar a cargarSelectCliente
					include dirname(__FILE__).'/../model/cargarSelectExpteClientes.php';
					include dirname(__FILE__).'/../view/modificacion_cli.php';
					break;
				case 'alta_expte':
					$bandera_baja_expte = 2;//Se inicializa la bandera para hacer el select de clientes
					$bandera_alta_expte = 1;//Se setea la bandera para entrar a la vista
					$bandera_query = 0;//Permite una query que muestre en el Select, todos los clientes del estudio
					include dirname(__FILE__).'/../model/cargarSelectExpteClientes.php';
					include dirname(__FILE__).'/../view/alta_expte.php';
					break;
				case 'modificar_expte':
					$bandera_baja_expte = 1;//Se inicializa la bandera para el select de exptes
					$bandera_mod_expte = 1;//Se inicializa la bandera para entrar en la vista
					include dirname(__FILE__).'/../model/cargarSelectExpteClientes.php';
					include dirname(__FILE__).'/../view/modificacion_expte.php';
				break;
				case 'baja_expte':
					$bandera_baja_expte = 1;//bandera para entrar a la vista 
					$bandera_baja_cli = 1;//Bandera para que el Select de la vista se cargue con los exptes.
					include dirname(__FILE__).'/../model/cargarSelectExpteClientes.php';
					include dirname(__FILE__).'/../view/baja_expte.php';
				break;
				case 'alta_prov':
					$bandera_alta_prov = 1;//Se inicializa la bandera para entrar a la vista
					$bandera_baja_expte= 1;//Se inica la bandera para entrar a cargarSelectCliente
					include dirname(__FILE__).'/../model/cargarSelectExpteClientes.php';
					include dirname(__FILE__).'/../view/alta_ultimo_prov.php';
				break;
				case 'alta_consulta':
					$bandera_alta_consulta = 1;//se inicializa la bandera para entrar a la vista
					$bandera_baja_expte = 2;//Bandera para que el select de la vista se cargue con clientes
					include dirname(__FILE__).'/../model/cargarSelectExpteClientes.php';
					include dirname(__FILE__).'/../view/alta_consulta.php';
				break;
				case 'modificar_datos':
					$bandera_elegirCliente = 3;//Se inicializa la bandera para que busque un abogado
					include dirname(__FILE__).'/../model/elegirClienteExpteMod.php';
					$bandera_modificacion_abogado = 1;//Bandera para entrar a la vista
					include dirname(__FILE__).'/../view/modificacion_abogado.php';
				break;
				case 'msg':
					$valor = $_GET['msg'];
					switch($valor)
					{
						case 'circunscripcion':
							include dirname(__FILE__).'/../view/circunscripcion.php';
						break;
						case 'vista1':
							header ('Location: ../view/vista1.php');
						break;
						case 'QuienesSomos':
							include dirname(__FILE__).'/../view/quienesSomos.php';
						break;
						case 'AbogadosAsoc':
							include dirname(__FILE__).'/../view/abogadosAsoc.php';
						break;
						case 'menu1':
							$bandera_menu =1;
							include dirname(__FILE__).'/../view/menu.php';
						break;
					}
						
				break;
				
				default:
					$bandera_vista1 = 1;
					include dirname(__FILE__).'/../view/vista1.php';
			}
		break;
		default:
			$bandera_vista1=1;
			require dirname(__FILE__).'/../view/vista1.php';
	}	
?>
