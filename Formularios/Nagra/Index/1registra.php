<!DOCTYPE html>
<html lang="es">
<?php
include_once ("../Base/Head.html");
include_once ("../Funciones/conexionbasedatos.php");
include_once ("../Funciones/funciones.php");
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
									
									$tipo = $_POST["TIPO"];
									$cuenta = $_POST["CUENTA"];   
									$razon = $_POST["RAZON"];
									$fecha = date("Y-m-d h:i:s");
									$referencia = $_POST["REFERENCIA"];
									$descripcion = $_POST["DESCRIPCION"];
									
									$sintomarecreado = $_POST["SINTOMARECREADO"];
									if($sintomarecreado == 1){
										$sintoma1 = $_POST ["SINTOMA1"];
										$sintoma2 = $_POST ["SINTOMA2"];
										$sintoma3 = $_POST ["SINTOMA3"];
										$sintoma4 = $_POST ["SINTOMA4"];
										$sintoma5 = $_POST ["SINTOMA5"];
										$sintoma6 = $_POST ["SINTOMA6"];
										$sintoma7 = $_POST ["SINTOMA7"];
									} 
										else {
											$sintoma1 = 'NULL';
											$sintoma2 = 'NULL';
											$sintoma3 = 'NULL';
											$sintoma4 = 'NULL';
											$sintoma5 = 'NULL';
											$sintoma6 = 'NULL';
											$sintoma7 = 'NULL';
										};
									$error = $_POST ["ERROR"];
									
									$fallasolucionada = $_POST ["FALLASOLUCIONADA"];
									
									if($fallasolucionada == 1){
										$solucionsi1 = $_POST ["SOLUCIONSI1"];
										$solucionsi2 = $_POST ["SOLUCIONSI2"];
										$solucionsi3 = $_POST ["SOLUCIONSI3"];
										$solucionsi4 = $_POST ["SOLUCIONSI4"];
										$solucionsi5 = $_POST ["SOLUCIONSI5"];
										$solucionsi6 = $_POST ["SOLUCIONSI6"];
										$solucionsi7 = $_POST ["SOLUCIONSI7"];
										$solucionno1 = 'NULL';
										$solucionno2 = 'NULL';
										$solucionno3 = 'NULL';
										$solucionno4 = 'NULL';
										$solucionno5 = 'NULL';
										$solucionno6 = 'NULL';
										$solucionno7 = 'NULL';
										$escalamiento = 'NULL';
									}
									elseif($fallasolucionada == 0){
										$solucionsi1 = 'NULL';
										$solucionsi2 = 'NULL';
										$solucionsi3 = 'NULL';
										$solucionsi4 = 'NULL';
										$solucionsi5 = 'NULL';
										$solucionsi6 = 'NULL';
										$solucionsi7 = 'NULL';
										$solucionno1 = $_POST ["SOLUCIONNO1"];
										$solucionno2 = $_POST ["SOLUCIONNO2"];
										$solucionno3 = $_POST ["SOLUCIONNO3"];
										$solucionno4 = $_POST ["SOLUCIONNO4"];
										$solucionno5 = $_POST ["SOLUCIONNO5"];
										$solucionno6 = $_POST ["SOLUCIONNO6"];
										$solucionno7 = $_POST ["SOLUCIONNO7"];
										$escalamiento = $_POST ["ESCALAMIENTO"];
									};
									
									$usuario = $_POST["USUARIO"];
									$empresa = $_POST["EMPRESA"];
									
								
									print_r($_POST); 
										
									$_GRABAR_SQL = "
										INSERT INTO $tbl_ccaa_pri_nagra
										(
										TIPO,CUENTA,RAZON,FECHA,REFERENCIA,DESCRIPCION,SINTOMARECREADO,
										SINTOMA1,SINTOMA2,SINTOMA3,SINTOMA4,SINTOMA5,SINTOMA6,SINTOMA7,
										ERROR,FALLASOLUCIONADA,
										SOLUCIONSI1,SOLUCIONSI2,SOLUCIONSI3,SOLUCIONSI4,SOLUCIONSI5,SOLUCIONSI6,SOLUCIONSI7,
										SOLUCIONNO1,SOLUCIONNO2,SOLUCIONNO3,SOLUCIONNO4,SOLUCIONNO5,SOLUCIONNO6,SOLUCIONNO7,ESCALAMIENTO,
										USUARIO,EMPRESA
										) 
										VALUES (
										'$tipo','$cuenta','$razon','$fecha','$referencia','$descripcion','$sintomarecreado',
										'$sintoma1','$sintoma2','$sintoma3','$sintoma4','$sintoma5','$sintoma6','$sintoma7',
										'$error','$fallasolucionada',
										'$solucionsi1','$solucionsi2','$solucionsi3','$solucionsi4','$solucionsi5','$solucionsi6','$solucionsi7',
										'$solucionno1','$solucionno2','$solucionno3','$solucionno4','$solucionno5','$solucionno6','$solucionno7','$escalamiento',
										'$usuario','$empresa'
										)";   
									//mysql_query($_GRABAR_SQL);
									//		
									include_once ("../Funciones/cierra_conexion.php"); 								
									
										echo "   
										<div class='alert alert-success'>
		                                <b>!Gracias!</b>, Información almacenada con éxito ... 
		                            	</div>   
										"; 
								
								?>
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
