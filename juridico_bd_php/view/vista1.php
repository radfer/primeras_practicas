<?php 
	
	if($bandera_vista1 == 1):
	require '../../comodin.php';

?>
	<HTML>
		<BODY>
			<H1>BIENVENIDOS A LA PAGINA DEL ESTUDIO JURIDICO FRANCO Y ASOCIADOS</H1>
			<BR>
			<BR>
				<FORM METHOD = "POST" ACTION = '../controler/control.php'>
					<FIELDSET STYLE = "width:35%; border:solid; color:blue; text-align:right">
						<LEGEND STYLE="color: black">Ingrese usuario y contraseña</LEGEND>
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
		
		</BODY>
	</HTML>
	<?php else: header('Location: ../controler/control.php');endif; ?>
