<?php
	if($bandera_modificacion_abogado ==1):
	require dirname(__FILE__).'/../comodin.php'; ?>
	
	<HTML>
		<HTML>
		<HEAD>
		<TITLE>Home |Estudio Jurídico</TITLE>
		<LINK REL="Stylesheet" HREF="../view/style/style.css">
		<SCRIPT LANGUAGE="JavaScript" src="../view/style/jquery-2.0.1.js"></SCRIPT>
		<SCRIPT LANGUAGE="JavaScript" src="../view/style/jquery-ui-1.10.3.custom.min.js"></SCRIPT>
		<meta charset="utf-8">
	</HEAD>
		<BODY class = 'principal'>
				<H1 STYLE="color: black">Modifique sus datos personales</H1>
				<BR>
				<BR>
						<BR>
						<H3>Apellido:
						<?php echo $cliente['apellido']; ?></H3>
						<BR>
						<H3>Nombre:
						<?php echo $cliente['nombre']; ?></H3>
						<BR>
						<H3>DNI:
						<?php echo $cliente['dni']; ?></H3>
						<BR>
						<H3>Matrícula:
						<?php echo $cliente['matricula']; ?></H3>
						<BR>
						<BR>
						<FORM METHOD = 'POST' ACTION = "../controler/control.php">
						<FIELDSET STYLE = "width:40%; border:solid; color:blue; text-align:right">
						<BR>
						Teléfono
						<INPUT TYPE = "text" VALUE = '<?php echo $cliente['telefono']; ?>'
						NAME= "tel_abogado"></INPUT>
						<BR>
						E-mail
						<INPUT TYPE = "text" VALUE = '<?php echo $cliente['mail']; ?>'
						NAME= "mail_abogado"></INPUT>
						<BR>
						Contraseña
						<INPUT TYPE = "text" VALUE = '<?php echo $cliente['contrasenia']; ?>' 
						NAME= "contrasenia_abogado"></INPUT>
						<BR>
						<INPUT TYPE = "hidden" VALUE = '<?php echo $cliente['id_abogado']; ?>'
						NAME = "id_abogado"></INPUT>
						<INPUT TYPE = "submit" VALUE= 'Enviar' NAME="update_abogado"></INPUT>
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
