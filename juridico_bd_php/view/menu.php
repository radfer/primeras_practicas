<?php 
	if($bandera_menu == 1):

	require '../../comodin.php';

?>
	<HTML>
		<BODY>
			<H1 STYLE = "color:violet">Bienvenido <?php echo $usuario;?></H1>
			<BR>
			<BR>
			<FORM METHOD = 'GET' ACTION = '../controler/control.php'>
				<LEGEND STYLE="color: black">Elija la opción deseada</LEGEND>
				<BR>
				<BR>
				<INPUT TYPE = 'submit' NAME = 'alta_cli' VALUE = 'Nuevo cliente'></INPUT>
				<BR>
				<BR>
				<INPUT TYPE = 'submit' NAME = 'baja_cli' VALUE = 'Eliminar cliente'></INPUT>
				<BR>
				<BR>
				<INPUT TYPE = 'submit' NAME = 'modificar_cli' VALUE = 'Modificar datos del cliente'></INPUT>
				<BR>
				<BR>
				<INPUT TYPE = 'submit' NAME = 'alta_expte' VALUE = 'Cargar Expediente'></INPUT>
				<BR>
				<BR>
				<INPUT TYPE = 'submit' NAME = 'modificar_expte' VALUE = 'Modificar datos de un Expediente'></INPUT>
				<BR>
				<BR>
				<INPUT TYPE = 'submit' NAME = 'alta_prov' VALUE = 'Agregar último movimiento a un expediente'></INPUT>
				<BR>
				<BR>
				<INPUT TYPE = 'submit' NAME = 'baja_prov' VALUE = 'Eliminar último movimiento a un expediente'></INPUT>
				<BR>
				<BR>
				<INPUT TYPE = 'submit' NAME = 'alta_consulta' VALUE = 'Cargar una nueva entrevista'></INPUT>
				<BR>
				<BR>
				<INPUT TYPE = 'submit' NAME = 'modificar_consulta' VALUE = 'Modificar una entrevista'></INPUT>
				<BR>
				<BR>
				<INPUT TYPE = 'submit' NAME = 'modificar_datos' VALUE = 'Modificar datos personales'></INPUT>
				<BR>
				<BR>
			</FORM>
		</BODY>
	
	</HTML>
	<?php endif; ?>
	
