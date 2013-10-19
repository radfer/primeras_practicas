<?php
	if($bandera_alta_cli ==1):
	require '../../comodin.php'; ?>
	
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
				<H1 STYLE="color: black">Ingrese los datos del nuevo cliente</H1>
				<BR>
				<BR>
					<FIELDSET STYLE = "width:45%; border:solid; color:blue; text-align:right">
						Nombre
						<INPUT TYPE = "text" NAME= "nombre_alta"></INPUT>
						<BR>
						Apellido
						<INPUT TYPE = "text" NAME= "apellido_alta"></INPUT>
						<BR>
						D.N.I
						<INPUT TYPE = "text" NAME= "dni_alta"></INPUT>
						<BR>
						Domicilio real
						<INPUT TYPE = "text" NAME= "domicilio_real"></INPUT>
						<BR>
						Teléfono
						<INPUT TYPE = "text" NAME= "telefono"></INPUT>
						<BR>
						E-mail
						<INPUT TYPE = "text" NAME= "mail"></INPUT>
						<BR>
						<BR>
						<INPUT TYPE = "submit" VALUE="Enviar" NAME="ingreso_alta"></INPUT>
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
