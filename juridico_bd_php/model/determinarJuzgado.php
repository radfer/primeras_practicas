<?php


		$json = file_get_contents('../circunscripcionTw.jsp');
		$array = json_decode($json, true);
		
		foreach ($array AS $array1)
		foreach ($array1 AS $array2)
		foreach($array2 AS $val)
		{
			if($val['id']== $id_juzgado[0])
			{
				$val1=sprintf("Juzgado: %s \n, Juez: %s, Secretaria: %s, Direccion: %s, Ciudad: %s",
				$val['Nombre'], $val['Juez'], $val['Secretaria'], $val['Direccion'], $val['Ciudad']);
				$bandera_juzgado= 1;
				break;
			}
		}
	
	
?>
