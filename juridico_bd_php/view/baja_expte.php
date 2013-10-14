<?php
	if($bandera_baja_cli == 1):
		require '../comodin.php'; ?>
		
	<HTML>
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
			<A HREF = '../controler/direccionador.php'>Salir</A>

		</BODY>
	</HTML>

<?php endif;?>
