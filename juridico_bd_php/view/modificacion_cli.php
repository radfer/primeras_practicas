<?php
	if($bandera_mod == 1):
		require '../comodin.php'; ?>
		
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
			<H1>Seleccione un cliente para la modificación de datos</H1>
			<BR>
			<BR>
			<FORM METHOD = 'POST' ACTION = '../controler/control.php'>
			<SELECT NAME = "clientes2"><?php
			foreach($lista_clientes as $valor):?>
			<option><?php echo $valor;?></option>
			<?php endforeach;?>
			</SELECT>
			<INPUT TYPE = 'submit' NAME = 'nominado' VALUE = 'Enviar'></INPUT>
			</FORM>
			<BR>
			<P STYLE = "color:red"><?php echo $mensaje_error2; ?></P>
			<A <a href="../controler/control.php?msg=menu1">Menú</A>
			<A HREF = '../controler/direccionador.php'>Logout</A>
		</BODY>
	</HTML>

<?php endif;?>
