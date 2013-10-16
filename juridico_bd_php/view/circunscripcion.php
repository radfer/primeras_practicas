

<HTML>
	
	<HEAD>
		<TITLE>Home |Estudio Jurídico</TITLE>
		<LINK REL="Stylesheet" HREF="style.css">
		<SCRIPT LANGUAGE="JavaScript" SRC="jquery-2.0.1.js"></SCRIPT>
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
			
		</DIV>
	<DIV CLASS = 'article'>
		<FORM METHOD = 'POST' ACTION = '../controler/control.php'>
			<SELECT NAME = "juzgado"><?php
			include '../model/elegirJuzgado.php';
			foreach($array as $valor)
			foreach ($valor as $clave)
			foreach($clave as $juzgado):?>
			<option><?php printf("%s %s", $juzgado['id'], $juzgado['Nombre']);?></option>
			<?php endforeach;?>
			</SELECT>
			<INPUT TYPE = 'submit' NAME = 'circunscripcion' VALUE = 'Enviar'></INPUT>
		</FORM>
		
		<P CLASS = 'main'></P><?php echo $hola; ?></P>
	
</DIV>
		
</DIV>
</BODY>
	</HTML>
	
	

