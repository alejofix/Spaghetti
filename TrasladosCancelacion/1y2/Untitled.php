<?php
	require implode(DIRECTORY_SEPARATOR, array(dirname(__DIR__), 'Funciones', 'Conexion.php'));

	$array = $_POST;
	ksort($array);
	while ($post = each($_POST))
	{
		echo $post[0] . " = " . $post[1];
		echo '<br/>';
	}


?>