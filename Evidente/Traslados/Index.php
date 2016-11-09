<!DOCTYPE html>
<html lang="es">
<?php
include_once ("../Base/Head.html");
// require implode(DIRECTORY_SEPARATOR, array(dirname(__DIR__), 'Funciones', 'Conexion.php'));
include_once ("../Funciones/Conexion.php");
?>
<body>

	<div class="panel-body">
		
		<!-- /.row -->
		<div class="row">
			<div class="col-lg-6">
				<div class="panel panel-primary">
					<div class="panel-heading">
						Valide la titularidad de quien llama
					</div>
					<div class="panel-body">
						<div class="row">
					
								<form id="evidente" method="POST" action="Index.php">
									<div class="col-lg-12">
										
										<div class="form-group">
											<label>Cuenta de Suscriptor:</label><br />
											<div class="col-lg-8">
												<input autofocus="autofocus" name="CUENTA" type="cuenta" type="number" class="form-control" placeholder="# de Suscriptor" required="required" />
											</div>
										</div><br /><hr />
										
										<?php
											include_once ("./Pregunta/Traslado1.php");
											include_once ("./Pregunta/Direccion1.php");
											include_once ("./Pregunta/Factura1.php");
										?>
									    <div>
                                        	<div class="col-lg-4">
												&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong></strong>
												<input type="submit" name="SUBMIT" class="btn btn-success" value="Validar Respuestas"/>
												&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											</div>
										</div>
									</div>		
								</form>
								<?php
									
									
									if(isset($_POST['SUBMIT']))
									{
										include_once ("Mensaje.php");
										unset($_POST['SUBMIT']);
									//	print_r($_POST);
										$a=date("Y-m-d H:i:s");
										$bd_datos=conectarse();
										mysql_query("INSERT INTO tbl_ccaa_pri_evidente
											(CUENTA, TRASLADO1, DIRECCION1, FACTURA1, FECHA) 
												VALUES
											('".$_POST['CUENTA']."',
											'".$_POST['TRASLADO1']."',
											'".$_POST['DIRECCION1']."',
											'".$_POST['FACTURA1']."',
											'".$a."') 
										",$bd_datos);
										mysql_close($bd_datos); 
											
									}
									
								?>
															
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
