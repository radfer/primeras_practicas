<?php
	if($bandera_alta_consulta ==1):
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
				<H1 STYLE="color: black">Registro de entrevistas con clientes</H1>
				<BR>
				<BR>
					<FIELDSET STYLE = "width:30%; border:solid; color:blue; text-align:left">
						Seleccione el cliente 
						<BR>
						<BR>
						<SELECT NAME = "ultima_consulta"><?php
							foreach($lista_clientes as $valor):?>
							<option><?php echo $valor;?></option>
							<?php endforeach;?>
							</SELECT>
						<BR>
						<BR>
						<BR>
						Comentarios
						<BR>
						<TEXTAREA NAME= "detalle_consulta" ROWS = '20' COLS = '63'></TEXTAREA>
						<BR>
						<BR>
						<INPUT TYPE = "submit" VALUE="Enviar" NAME="ingreso_consulta"></INPUT>
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
