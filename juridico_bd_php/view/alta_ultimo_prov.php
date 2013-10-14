<?php
	if($bandera_alta_prov ==1):
	require '../../comodin.php'; ?>
	
	<HTML>
		<BODY>
			<FORM METHOD = 'POST' ACTION = "../controler/control.php">
				<H1 STYLE="color: black">Ingrese el último movimiento al expediente</H1>
				<BR>
				<BR>
					<FIELDSET STYLE = "width:30%; border:solid; color:blue; text-align:left">
						Seleccione el expediente
						<BR>
						<BR>
						<SELECT NAME = "ultimo_mov"><?php
							foreach($lista_clientes as $valor):?>
							<option><?php echo $valor;?></option>
							<?php endforeach;?>
							</SELECT>
						<BR>
						<BR>
						<BR>
						Último movimiento
						<BR>
						<TEXTAREA NAME= "detalle_prov" ROWS = '20' COLS = '63'></TEXTAREA>
						<BR>
						<BR>
						<INPUT TYPE = "submit" VALUE="Enviar" NAME="ingreso_alta_prov"></INPUT>
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
