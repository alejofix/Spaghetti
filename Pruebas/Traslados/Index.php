<!DOCTYPE html>
<html lang="es">
<?php
include_once ("../Base/Head.html");
require implode(DIRECTORY_SEPARATOR, array(dirname(__DIR__), 'Funciones', 'Conexion.php'));
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
                     						<label>Cuenta de Suscriptor:&nbsp;&nbsp;&nbsp;  </label>
                                            <input name="cuenta" id="cuenta" size="15" maxlength="8" placeholder="No. Cuenta" required="required" />
                                        </div>
										
										<?php
											include_once ("./Pregunta/Traslado.php");
											include_once ("./Pregunta/Direccion.php");
											include_once ("./Pregunta/Factura.php");
										?>
									    <div>
                                        	<div class="col-lg-4">
												&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												<input type="submit" name="submit" class="btn btn-success" value="Validar Respuestas"/>
												&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											</div>
										</div>
				
									</div>		
								</form>
								<?php
									if(isset($_POST['submit']))
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
