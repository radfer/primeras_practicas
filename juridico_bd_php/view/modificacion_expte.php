<?php
	if($bandera_mod_expte == 1):
		require '../comodin.php'; ?>
		
	<HTML>
		<BODY>
			<H1>Seleccione un expediente para la modificación de datos</H1>
			<BR>
			<BR>
			<FORM METHOD = 'POST' ACTION = '../controler/control.php'>
			<SELECT NAME = "expediente"><?php
			foreach($lista_clientes as $valor):?>
			<option><?php echo $valor;?></option>
			<?php endforeach;?>
			</SELECT>
			<INPUT TYPE = 'submit' NAME = 'nominado' VALUE = 'Enviar'></INPUT>
			</FORM>
			<BR>
			<P STYLE = "color:red"><?php echo $mensaje_error2; ?></P>
		</BODY>
	</HTML>

<?php endif;?>
