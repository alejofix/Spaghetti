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
						Confirme Cuenta Nagra 
					</div>
					<div class="panel-body">
						<div class="row">
					
								<form id="FormIndex" method="POST" action="Formulario.php">
									<div class="col-lg-12">
										
										<div class="form-group">
											<label>Cuenta de Suscriptor:</label><br />
											<div class="col-lg-8">
												<input autofocus="autofocus" name="CUENTA" type="cuenta" type="number" class="form-control" placeholder="# de Suscriptor" />
												
											</div>
											<div class="col-lg-4">
												<input type="submit" class="btn btn-success" value="Confirmar"/>
											</div>
										</div>
										
										<br />
										<hr />
										
									</div>	
								</form>
							

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
