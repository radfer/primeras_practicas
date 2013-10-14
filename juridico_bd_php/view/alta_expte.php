<?php
	if($bandera_alta_expte ==1):
	require '../../comodin.php'; ?>
	
	<HTML>
		<BODY>
			<FORM METHOD = 'POST' ACTION = "../controler/control.php">
				<H1 STYLE="color: black">Ingrese los datos del nuevo expediente</H1>
				<BR>
				<BR>
					<FIELDSET STYLE = "width:45%; border:solid; color:blue; text-align:right">
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
					<A HREF = '../controler/direccionador.php'>Salir</A>
			
			</FORM>
			
			
		</BODY>
	
	</HTML>

<?php endif;?>
