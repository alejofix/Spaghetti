<?php

	//variables
	$traslado = $_GET['traslado'];
	$direccion = $_GET['direccion'];
	$factura = $_GET['factura'];
	
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