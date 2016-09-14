<!DOCTYPE html>
<html lang="es">
<?php
include_once ("../Base/Head.html");
?>

<body>

		<script>
			function copiarAlPortapapeles(id_elemento) {
			  var aux = document.createElement("input");
			  aux.setAttribute("value", document.getElementById(id_elemento).innerHTML);
			  document.body.appendChild(aux);
			  aux.select();
			  document.execCommand("copy");
			  document.body.removeChild(aux);
			}
		 </script>
 
 
	<div class="panel-body">
		<!--
		<div class="row">
			<div class="col-lg-6">
				<h3 class="page-header">Generador Guión</h3>
			</div>

		</div>
		-->
		<!-- /.row -->
		<div class="row">
			<div class="col-lg-6">
				<div class="panel panel-primary">
					<div class="panel-heading">
						Generador Guión 
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								
								<div class="form-group">
									
									<label for="disabledSelect">
									
										<?php
											include_once ("Copiar.php");
										?>
									
									</label>
									
								</div>
								<div>
                                	<div class="col-lg-4">
					
										<button class="btn btn-success" onclick="copiarAlPortapapeles('disabledInput')">Copiar Guión</button>

									</div>
								</div>
								
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

