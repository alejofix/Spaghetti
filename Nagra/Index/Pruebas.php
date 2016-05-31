<?php
	
	require implode(DIRECTORY_SEPARATOR, array(dirname(__DIR__), 'Funciones', 'Conexion.php'));
	
	$conexionObj = new Conexion();
	$conexion = $conexionObj->pdo();
	
	$consulta = $conexion->prepare('SELECT * FROM tbl_ccaa_sec_nagra_razon WHERE ESTADO = ?');
	$consulta->bindValue(1, 1);
	$consulta->execute();
	
	$resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
	
?>

	<select>
		<option value="">Escoja una Opcion</option>
		<optgroup>
			<?php foreach ($resultado AS $param): ?>
				
				<option value="<?php echo $param['ID'] ?>"><?php echo $param['RAZON'] ?></option>
				
			<?php endforeach; ?>
		</optgroup>
	</select>