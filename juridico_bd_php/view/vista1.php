<?php 
	if($bandera_vista1 == 1):
	require '../comodin.php';

?>
	<HTML>
		<HEAD>
		<TITLE>Home |Estudio Jurídico</TITLE>
		<LINK REL="Stylesheet" HREF="style.css">
		<meta charset="utf-8">
	</HEAD>
		<BODY CLASS = 'principal'>
			<H1 CLASS = 'membrete'>ESTUDIO JURIDICO FRANCO Y ASOCIADOS</H1>
			<BR>
			<BR>
		<DIV id="main-menu">
			<UL>
				<LI><a href="../controler/control.php?msg=vista1">Inicio</a></LI>
				<LI><a href="../controler/control.php?msg=QuienesSomos">Quiénes somos</a></LI>
				<LI><a href="../controler/control.php?msg=AbogadosAsoc">Abogados Asociados</a></LI>
				<LI><a href="../controler/control.php?msg=circunscripcion">Conozca su Circunscripción</a></LI>
			</UL>
		</DIV>
			
			<DIV CLASS = 'logeo'>
				<FORM METHOD = "POST" ACTION = '../controler/control.php'>
					<FIELDSET CLASS = 'logueo'>
						<LEGEND STYLE="color: black text">Ingreso de profesionales</LEGEND>
						Usuario
						<INPUT TYPE= "text" NAME = "usuario"></INPUT>
						<BR>
						Contraseña
						<INPUT TYPE = "password" NAME= "contrasenia"></INPUT>
						<BR>
						<INPUT TYPE = "submit" VALUE="Ingreso" NAME="Enviar"></INPUT>
					</FIELDSET>
				</FORM>
				<P STYLE = "color:red"><?php echo $mensaje_error; ?></P>
			</DIV>
			
			
		</BODY>
	</HTML>
	<?php else: header('Location: ../controler/control.php');endif; ?>
