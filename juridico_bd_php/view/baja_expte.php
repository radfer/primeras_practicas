<?php
	if($bandera_baja_cli == 1):
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
	</HEAD class = 'principal'>
		<BODY>
			<H1>Seleccione un expediente para eliminar</H1>
			<BR>
			<BR>
			<FORM METHOD = 'POST' ACTION = '../controler/control.php'>
			<SELECT NAME = "eliminar_expte"><?php
			foreach($lista_clientes as $valor):?>
			<option><?php  echo $valor;?></option>
			<?php endforeach;?>
			</SELECT>
			<INPUT TYPE = 'submit' NAME = 'nominado' VALUE = 'Enviar'></INPUT>
			</FORM>
			<BR>
			<P STYLE = "color:red"><?php echo $mensaje_error; ?></P>
			<BR>
			<BR>
			<A <a href="../controler/control.php?msg=menu1">Menú</A>
			<A HREF = '../controler/direccionador.php'>Logout</A>

		</BODY>
	</HTML>

<?php endif;?>
