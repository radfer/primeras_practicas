<?php
	if($bandera_mod_expte2 ==1):
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
				<H1 STYLE="color: black">Modifique los datos del Expediente</H1>
				<BR>
				<BR>
					<FIELDSET STYLE = "width:55%; border:solid; color:blue; text-align:right">
						Caratula
						<INPUT TYPE = "text" VALUE = '<?php echo $cliente['caratula']; ?>' 
						NAME= "caratula"></INPUT>
						<BR>
						Número de expediente
						<INPUT TYPE = "text" VALUE = '<?php echo $cliente['num_expte']; ?>' 
						NAME= "num_expte"></INPUT>
						<BR>
						Año
						<INPUT TYPE = "text" VALUE = '<?php echo $cliente['anio']; ?>' 
						NAME= "anio"></INPUT>
						<BR>
						Juzgado
						<INPUT TYPE = "text" VALUE = '<?php echo $cliente['juzgado']; ?>' 
						NAME= "juzgado"></INPUT>
						<BR>
						Rol de parte
						<INPUT TYPE = "text" VALUE = '<?php echo $cliente['tipo_de_parte']; ?>' 
						NAME= "tipo_de_parte"></INPUT>
						<BR>
						Abogado de la contraparte
						<INPUT TYPE = "text" VALUE = '<?php echo $cliente['abogado_contraparte']; ?>' 
						NAME= "abogado_contraparte"></INPUT>
						<BR>
						Nombre de la contraparte
						<INPUT TYPE = "text" VALUE = '<?php echo $cliente['nombre_contraparte']; ?>' 
						NAME= "nombre_contraparte"></INPUT>
						<BR>
						Domicilio constituido de la contraparte
						<INPUT TYPE = "text" VALUE = '<?php echo $cliente['domicilio_const_contraparte']; ?>' 
						NAME= "domicilio_const_contraparte"></INPUT>
						<BR>
						Domicilio real de la contraparte
						<INPUT TYPE = "text" VALUE = '<?php echo $cliente['domicilio_real_contraparte']; ?>' 
						NAME= "domicilio_real_contraparte"></INPUT>
						<BR>
						Circunscripción
						<INPUT TYPE = "text" VALUE = '<?php echo $cliente['circunscripcion']; ?>' 
						NAME= "circunscripcion"></INPUT>
						<BR>
						<INPUT TYPE = "hidden" VALUE = '<?php echo $cliente['id_expediente']; ?>' 
						NAME = "id_expediente"></INPUT>
						<INPUT TYPE = "submit" VALUE= 'Enviar' NAME="update_expte"></INPUT>
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
