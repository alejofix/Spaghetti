<?php

	require implode(DIRECTORY_SEPARATOR, array(dirname(dirname(__DIR__)), 'Funciones', 'Conexion.php'));

	$conexion = new Conexion();
	$consulta = $conexion->pdo()->prepare('SELECT ID, CUENTA FROM tbl_ccaa_sec_nagra_cuentas WHERE CUENTA = ?');
	$consulta->bindValue(1, trim($_POST['CUENTA']));
	$consulta->execute();
	$parametro = $consulta->fetch(PDO::FETCH_ASSOC);
	
	if($consulta->rowCount() >= 1):
		echo '<label>Cuenta de Suscriptor:</label><br />';
		echo '<div class="col-lg-4">';
		echo '<input class="form-control" value="'.$parametro['CUENTA'].'" disabled="disabled" />';
		echo '<input type="hidden" name="CUENTA" id="cuenta" class="form-control" value="'.$parametro['CUENTA'].'" requiered="requiered" />';
		echo '</div><br /><hr />';
	//	echo '
	//			</button>
    //            	<button type="button" class="btn btn-success btn-circle"><i class="fa fa-check"></i>
    //            </button>
	// 		';
	else:
		header("location: ./Index2.php");
	endif;
		
?> 		