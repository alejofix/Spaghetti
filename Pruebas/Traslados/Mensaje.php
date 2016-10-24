
<?php

	require implode(DIRECTORY_SEPARATOR, array(dirname(__DIR__), 'Funciones', 'Conexion.php'));
	
	//variables
	$traslado = $_POST['traslado'];
	$direccion = $_POST['direccion'];
	$factura = $_POST['factura'];
	$cuenta = $_POST['cuenta'];
	$fecha = date("d-m-Y H:i");
	$submit = $_POST['submit'];
	
	//// condición de SWEETALERT
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
	
	//// condición de guardar en BD
	if($submit == 'Validar Respuestas'){
		
		while ($post = each($_POST))
		{
		echo $post[0] . " = " . $post[1];
		}
		
	}
	else{
		
		echo 'Consulte con el Administrador';
	}

	
	
?>