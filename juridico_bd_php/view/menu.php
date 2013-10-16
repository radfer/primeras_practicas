<?php 
	if($bandera_menu == 1):

	require '../../comodin.php';

?>
	<HTML>
		<HEAD>
		<TITLE>Home |Estudio Jurídico</TITLE>
		<LINK REL="Stylesheet" HREF="style.css">
		<SCRIPT LANGUAGE="JavaScript" src="jquery-2.0.1.js"></SCRIPT>
		<SCRIPT LANGUAGE="JavaScript" src="jquery-ui-1.10.3.custom.js"></SCRIPT>
		<SCRIPT LANGUAGE="JavaScript" src="jquery-ui-1.10.3.custom.min.js"></SCRIPT>
		<meta charset="utf-8">
	</HEAD>
	
		<BODY class = 'principal'>
			<H1 STYLE = "color:violet">Bienvenido <?php echo $_SESSION['usuario'];?></H1>
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
				<INPUT TYPE = 'submit' NAME = 'baja_expte' VALUE = 'Eliminar expediente'></INPUT>
				<BR>
				<BR>
				<INPUT TYPE = 'submit' NAME = 'alta_prov' VALUE = 'Agregar último movimiento a un expediente'></INPUT>
				<BR>
				<BR>
				<INPUT TYPE = 'submit' NAME = 'alta_consulta' VALUE = 'Cargar una nueva entrevista'></INPUT>
				<BR>
				<BR>
				<INPUT TYPE = 'submit' NAME = 'modificar_datos' VALUE = 'Modificar datos personales'></INPUT>
				<BR>
				<BR>
			</FORM>
			<A HREF = '../controler/direccionador.php'>Salir</A>
		</BODY>
	
	</HTML>
	<?php endif; ?>
	
