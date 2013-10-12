<?php
	require '../comodin.php';
	$bandera_cliente = 1; //bandera para entrada al archivo que carga el array de clientes
	$mensaje_error = ' ';//Se inicializa el mensaje de error
	$id_abogado = 0;
	$response = $_SERVER['REQUEST_METHOD'];//Se carga el método en una variable
	switch($response)//Aqui se evalúa que tipo de peticiones se realizan en cada vista
	{
		case 'POST'://se verifica que sea POST
			$clave = key($_POST);//con la llave del arreglo se identifica de que página viene el post
			switch($clave)
			{
				case 'usuario'://Se está ingresando por la página de inicio
					$usuario = $_POST['usuario'];//Se carga el usario ingresado
					$contrasenia= $_POST['contrasenia'];//se carga la contraseña ingresada
					if(!empty($usuario) && !empty($contrasenia))//Se verifica que se hayan ingresado valores efectivamente
					{
						$bandera_select=1;//bandera para entrar a la página
						include '../model/consultaSelectBD.php';//se ejecuta el archivo que consultará a la BD
						if($bandera_consulta == 1)//Si se vuelve del script con resultado positivo
						{
							$bandera_menu = 1;//Se inicializa la bandera de entrada
							include '../view/menu.php';//Se ejecuta la vista para el usuario logueado
						}else//en caso contrario se reenvía al usuario al formulario de inicio
						{
							$bandera_vista1 = 1;
							include '../view/vista1.php';
						}
					}else
					{
						$bandera_vista1 = 1;
						$mensaje_error = 'No se ha ingresado un usuario y/o contraseña';
						include '../view/vista1.php';
					}
				break;
				case 'id_alta'://Viene de la view alta_cli.php
					$id = $_POST['id_alta'];
					$nombre = $_POST['nombre_alta'];
					$apellido = $_POST['apellido_alta'];//Se carga lo ingresado por el usuario
					$dni = $_POST['dni_alta'];
					$dom_real = $_POST['domicilio_real'];
					$telefono = $_POST['telefono'];
					$mail = $_POST['mail'];
					if(!empty($id)&&!empty($nombre)&&!empty($apellido)&&!empty($dni)&&!empty($dom_real)
					&&!empty($telefono))//Controla que los datos que no pueden ser nulos hayan sido ingresados
					{
						$bandera_insertBD = 1;
						include '../model/IngresoInsertBD.php';//Se ingresa a la BD
						if($bandera_insert == 1)//Avisa si el ingreso fue exitoso o falló
						{
							$mensaje_error = 'El ingreso fue exitoso';
						}else
						{
							$mensaje_error = 'El ingreso ha fallado, intente nuevamente';
						}
						$bandera_alta_cli = 1;
						include '../view/alta_cli.php';
					}else
					{
						$mensaje_error = 'Alguno de los campos está incompleto';//En caso de que el usuario
						$bandera_alta_cli = 1;//no haya ingresado algún cambio, avisa
						include '../view/alta_cli.php';
					}			
				
				break;
				case 'clientes'://viene de la página de baja de un cliente
					$nominado = $_POST['clientes'];//Se carga el cliente seleccionado por el usuario
					$bandera_eliminarCliente = 1;//Se inicializa la bandera para entrar a la página
					$nombre = explode(' ', $nominado);//Se transforma el string a un arreglo de tres elementos (apellido y nombre)
					include '../model/eliminarCliente.php';//Se ejecuta el archivo para eliminar
					$bandera_baja_cli = 1;
					if($bandera_nominado == 1)//Si da un resultado positivo se avisa
					{
						$mensaje_error = 'El registro se eliminó exitosamente';
					}else
					{
						$mensaje_error = 'No se ha podido eliminar el registro';//en caso contrario, se avisa que no sucedió
					}
					$incluir = 1;//bandera que evita que se realice una nueva conexión en el archivo para el 
					//Select
					include '../model/cargarSelectCliente.php';
					include '../view/baja_cli.php';
				break;
				case 'clientes2'://viene de la vista para modifica los datos de un cliente
					$nominado2 = $_POST['clientes2'];//Se carga el cliente seleccionado por el usuario
					$bandera_elegirCliente = 1;//Se inicializa la bandera para entrar a la página
					$nombre = explode(' ', $nominado2);//Se transforma el string a un arreglo de dos elementos (apellido y nombre)
					include '../model/elegirClienteMod.php';//Se ejecuta el archivo para buscar el cliente elegido
					$bandera_mod = 1;
					if($bandera_cliente == 1)//Si da un resultado positivo se avisa
					{
						$bandera_mod2 = 1;//Bandera para entrar a la vista modificacion_cli2
						$bandera_baja_cli = 1;//bandera para entra a cargarSelectCliente
						$incluir = 1;//bandera que evita que se pisen las conexiones a la base de datos
						include '../model/cargarSelectCliente.php';
						include '../view/modificacion_cli.php';
						include '../view/modificacion_cli2.php';
					}else
					{
						$mensaje_error = 'No se ha modificar el registro';//en caso contrario, se avisa que no sucedió
					}
					include '../view/modificacion.php';
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
						include '../model/actualizarCliente.php';
						$bandera_mod = 1;
						if($bandera_resMod == 1)//Si da un resultado positivo se avisa
						{
							$mensaje_error = 'El registro se ha modificado';
						}else
						{							
							$mensaje_error = 'No se ha podido modificar el registro';//en caso contrario, se avisa que no sucedió
						}
						$bandera_mod2 = 1;
						$incluir = 1;
						$bandera_baja_cli = 1;
						include '../model/cargarSelectCliente.php';
						include '../view/modificacion_cli.php';
						include '../view/modificacion_cli2.php';
					}else
					{
						$mensaje_error2 = 'Alguno de los campos está vacío';
						$bandera_mod = 1;
						include '../model/cargarSelectClientes.php';
						include '../view/modificacion_cli.php';
					}		
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
					include '../view/alta_cli.php';
					break;
				case 'baja_cli':
					$bandera_baja_cli = 1;
					include '../model/cargarSelectCliente.php';
					include '../view/baja_cli.php';
					break;
				case 'modificar_cli':
					$bandera_mod = 1;//Se inicia la bandera para entrar a modificacion_cli
					$bandera_baja_cli = 1;//Se inica la bandera para entrar a cargarSelectCliente
					include '../model/cargarSelectCliente.php';
					include '../view/modificacion_cli.php';
					break;
				default:
					$bandera_vista1 = 1;
					include '../view/vista1.php';
			}
		break;
		default:
			$bandera_vista1=1;
			require '../view/vista1.php';
	}	
?>
