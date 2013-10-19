<?php
	if($bandera_alta_expte ==1):
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
				<H1 STYLE="color: black">Ingrese los datos del nuevo expediente</H1>
				<BR>
				<BR>
					<FIELDSET STYLE = "width:55%; border:solid; color:blue; text-align:right">
						Carátula
						<INPUT TYPE= "text" NAME = "caratula_alta"></INPUT>
						<BR>
						Número de Expediente
						<INPUT TYPE = "text" NAME= "numExpte_alta"></INPUT>
						<BR>
						Año
						<INPUT TYPE = "text" NAME= "anio_alta"></INPUT>
						<BR>
						Juzgado
						<INPUT TYPE = "text" NAME= "juzgado_alta"></INPUT>
						<BR>
						Tipo de parte
						<INPUT TYPE = "text" NAME= "tipoParte_alta"></INPUT>
						<BR>
						Abogado de la contraparte
						<INPUT TYPE = "text" NAME= "abogadoContraparte_alta"></INPUT>
						<BR>
						Nombre de la contraparte
						<INPUT TYPE = "text" NAME= "nombreContraparte_alta"></INPUT>
						<BR>
						Domicilio constituido 
						de la contraparte
						<INPUT TYPE = "text" NAME= "domConstContraparte_alta"></INPUT>
						<BR>
						Domicilio real 
						de la contraparte
						<INPUT TYPE = "text" NAME= "domRealContraparte_alta"></INPUT>
						<BR>
						Circunscripción
						<INPUT TYPE = "text" NAME= "circunscripcion_alta"></INPUT>
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
