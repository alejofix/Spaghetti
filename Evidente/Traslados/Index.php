<!DOCTYPE html>
<html lang="es">
<?php
include_once ("../Base/Head.html");
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
					
								<form id="evidente" method="GET" action="Index.php">
									<div class="col-lg-12">
										
										<?php
											include_once ("./Pregunta/Traslado.php");
											include_once ("./Pregunta/Direccion.php");
											include_once ("./Pregunta/Factura.php");
										?>
									    <div>
                                        	<div class="col-lg-4">
												&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong></strong>
												<input type="submit" name="submit" class="btn btn-success" value="Validar Respuestas"/>
												&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											</div>
										</div>
				
									</div>		
								</form>
								<?php
									if(isset($_GET['submit']))
									{
										include_once ("Mensaje.php");
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
