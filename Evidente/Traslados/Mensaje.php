<?php

	//variables
	$traslado = $_POST['TRASLADO1'];
	$direccion = $_POST['DIRECCION1'];
	$factura = $_POST['FACTURA1'];
	
	if($traslado == 'SI'){
		
		if($direccion == 'SI'){
			
			if($factura == 'SI'){
				include_once ("./Mensaje/Yes.php");
			
			}else
				include_once ("./Mensaje/Auch.php");
			
		}else
			include_once ("./Mensaje/Auch.php");	
	
	}else
		include_once ("./Mensaje/Auch.php");
	
	
?>