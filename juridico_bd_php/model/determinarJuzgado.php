<?php

		//Con este código se extrae la información de un archivo tipo json
		$json = file_get_contents('../circunscripcionTw.jsp');
		$array = json_decode($json, true);
		
		foreach ($array AS $array1)
		foreach ($array1 AS $array2)
		foreach($array2 AS $val)
		{
			if($val['id']== $id_juzgado[0])
			{
				$val1 = $val['Nombre'];
				$val2 = $val['Juez'];
				$val3 = $val['Secretaria'];
				$val4 = $val['Direccion'];
				$val5 = $val['Ciudad'];
				$bandera_juzgado= 1;
				break;
			}
		}
	
	
?>
