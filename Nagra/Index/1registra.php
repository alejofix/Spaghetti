<!DOCTYPE html>
<html lang="es">
<?php
	include_once ("../Base/Head.html");
//  include_once ("../Funciones/funciones.php");
	require implode(DIRECTORY_SEPARATOR, array(dirname(__DIR__), 'Funciones', 'Conexion.php'));
?>
<body>

	<div class="panel-body">
		<div class="row">
			<div class="col-lg-6">
				<h3 class="page-header">Proyecto Nagra</h3>
			</div>
			<!-- /.col-lg-6 -->
		</div>
		<!-- /.row -->
		<div class="row">
			<div class="col-lg-6">
				<div class="panel panel-primary">
					<div class="panel-heading">
						Formulario Completado 
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<br /><br />
								<div class="form-group">
								
<?php
	// Recibimos por POST los datos procedentes del formulario
	##### INICIO PROGRAM MASTER ####
	$array = $_POST;
	ksort($array);
	
//	echo '<code><pre>';
//	print_r($array);
	
	$conexion = new Conexion();
	$SQL = $conexion->pdo()->prepare('
		INSERT INTO tbl_ccaa_pri_nagra (
			CUENTA, DESCRIPCION, EMPRESA, ERROR, ESCALAMIENTO, 
			FALLASOLUCIONADA, RAZON, REFERENCIA, SINTOMA1, SINTOMA2, 
			SINTOMA3, SINTOMA4, SINTOMA5, SINTOMA6, SINTOMA7, 
			SINTOMARECREADO, SOLUCIONNO1, SOLUCIONNO2, SOLUCIONNO3, SOLUCIONNO4, 
			SOLUCIONNO5, SOLUCIONNO6, SOLUCIONNO7, SOLUCIONSI1, SOLUCIONSI2, 
			SOLUCIONSI3, SOLUCIONSI4, SOLUCIONSI5, SOLUCIONSI6, SOLUCIONSI7, 
			TIPO, USUARIO, FECHA
		) 
		VALUES (
			:CUENTA, :DESCRIPCION, :EMPRESA, :ERROR, :ESCALAMIENTO, 
			:FALLASOLUCIONADA, :RAZON, :REFERENCIA, :SINTOMA1, :SINTOMA2, 
			:SINTOMA3, :SINTOMA4, :SINTOMA5, :SINTOMA6, :SINTOMA7, 
			:SINTOMARECREADO, :SOLUCIONNO1, :SOLUCIONNO2, :SOLUCIONNO3, :SOLUCIONNO4, 
			:SOLUCIONNO5, :SOLUCIONNO6, :SOLUCIONNO7, :SOLUCIONSI1, :SOLUCIONSI2, 
			:SOLUCIONSI3, :SOLUCIONSI4, :SOLUCIONSI5, :SOLUCIONSI6, :SOLUCIONSI7, 
			:TIPO, :USUARIO, :FECHA
		);
	');
	
		foreach ($array AS $columna => $valor):
			
			if(strpos($columna, 'SINTOMA') !== false AND $columna != 'SINTOMARECREADO'):
				$SQL->bindValue(':'.$columna, ($array['SINTOMARECREADO'] == 1) ? strtoupper($valor) : null);
			elseif(strpos($columna, 'SOLUCIONSI') !== false AND $columna != 'FALLASOLUCIONADA'):
				$SQL->bindValue(':'.$columna, ($array['FALLASOLUCIONADA'] == 1) ? strtoupper($valor) : null);
			elseif(strpos($columna, 'SOLUCIONNO') !== false AND $columna != 'FALLASOLUCIONADA'):
				$SQL->bindValue(':'.$columna, ($array['FALLASOLUCIONADA'] == 0) ? strtoupper($valor) : null);
			//
			elseif(strpos($columna, 'ESCALAMIENTO') !== false AND $columna != 'FALLASOLUCIONADA'):
				$SQL->bindValue(':'.$columna, ($array['FALLASOLUCIONADA'] == 0) ? strtoupper($valor) : null);
			//
			else:
				$SQL->bindValue(':'.$columna, strtoupper($valor));
			endif;
			
		endforeach;
		
		$SQL->bindValue(':FECHA', date("Y-m-d H:i:s"));
		
		$SQL->execute();

		
	##### FIN PROGRAM MASTER ####
	
	
	//		
	
		echo "   
		<div class='alert alert-success'>
        	<b>!Gracias!</b>, 
			Información almacenada con éxito ... 
   			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   			<button type='button' class='btn btn-success btn-circle btn-lg'><i class='fa fa-check'></i>
		</div> 
	 
		"; 

?>
		<div class='panel-body'>
			<form method="get" action="Index.php">
			    <button class='btn btn-primary btn-lg btn-block' type="submit">
					<i class='fa fa-link'></i>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					Nuevo Registro
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
				</button>
			</form>
		</div> 	
								<!-- -->
								
								
								<!-- -->
								</div>
								<br /><br />
							</div>

						</div>
						<!-- /.row (nested) -->
					</div>
					<!-- /.panel-body -->
				</div>
				<!-- /.panel -->
			</div>
			<!-- /.col-lg-6 -->
		</div>
		<!-- /.row -->

	</div>

<?php
include_once ("../Base/Script.html");
?>

</body>
</html>
