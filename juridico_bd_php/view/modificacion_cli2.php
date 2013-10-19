<?php
	if($bandera_mod2 ==1):
	require '../comodin.php'; ?>
	
	<HTML>
		<HTML>
		<HEAD>
		<TITLE>Home |Estudio Jurídico</TITLE>
		<LINK REL="Stylesheet" HREF="style/style.css">
		<SCRIPT LANGUAGE="JavaScript" src="style/jquery-2.0.1.js"></SCRIPT>
		<SCRIPT LANGUAGE="JavaScript" src="style/jquery-ui-1.10.3.custom.js"></SCRIPT>
		<SCRIPT LANGUAGE="JavaScript" src="style/jquery-ui-1.10.3.custom.min.js"></SCRIPT>
		<meta charset="utf-8">
	</HEAD>
		<BODY class = 'principal'>
			<FORM METHOD = 'POST' ACTION = "../controler/control.php">
				<H1 STYLE="color: black">Modifique los datos del cliente</H1>
				<BR>
				<BR>
					<FIELDSET STYLE = "width:45%; border:solid; color:blue; text-align:right">
						Nombre
						<INPUT TYPE = "text" VALUE = '<?php echo $cliente['nombre']; ?>' NAME= "nombre_mod"></INPUT>
						<BR>
						Apellido
						<INPUT TYPE = "text" VALUE = '<?php echo $cliente['apellido']; ?>' NAME= "apellido_mod"></INPUT>
						<BR>
						DNI
						<INPUT TYPE = "text" VALUE = '<?php echo $cliente['dni']; ?>' NAME= "dni_mod"></INPUT>
						<BR>
						Domicilio Real
						<INPUT TYPE = "text" VALUE = '<?php echo $cliente['domicilio_real']; ?>' NAME= "domicilio_mod"></INPUT>
						<BR>
						Teléfono
						<INPUT TYPE = "text" VALUE = '<?php echo $cliente['telefono']; ?>' NAME= "tel_mod"></INPUT>
						<BR>
						E-mail
						<INPUT TYPE = "text" VALUE = '<?php echo $cliente['mail']; ?>' NAME= "mail_mod"></INPUT>
						<BR>
						<INPUT TYPE = "hidden" VALUE = '<?php echo $cliente['id_cliente']; ?>' NAME = "id_mod"></INPUT>
						<INPUT TYPE = "submit" VALUE= 'Enviar' NAME="ingreso_mod"></INPUT>
					</FIELDSET>
					<BR>
					<BR>
					<P STYLE = "color:red"><?php echo $mensaje_error; ?></P>
					<BR>
					<BR>
					<A <a href="../controler/control.php?msg=menu1">Menú</A>
					<A HREF = '../controler/direccionador.php'>Logout</A>
			</FORM>
			
			
		</BODY>
	
	</HTML>

<?php endif;?>
