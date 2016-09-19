<!DOCTYPE html>
<html lang="es">
<?php
include_once ("../Base/Head.html");
?>
<body>


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
					
								<form id="guionGeneral" method="POST" action="Guion.php">
									
									<div class="col-lg-12">
										
										<div class="form-group">
											<label>Falla Claro Video</label>
											<div class="col-lg-12">
												<input class="form-control" type="text" name="falla" id="falla"   placeholder="Describa Falla" autofocus="autofocus" required="required"   maxlength="100"/>
												<p class="help-block">Ej.: la serie 'The Walking Dead' no está completa ...</p>
											</div><br />
										</div>
										
										<div class="form-group">
											<label>Correo Registrado </label>
											<div class="col-lg-12">
												<input class="form-control" type="email" name="correo" id="correo"   placeholder="Correo registrado Claro Video" autofocus="Correo Registrado Claro Video" required="required"   maxlength="100"/>
											</div><br />
										</div>
										
										<!-- NAGRA inicio -->
													<?php
														include_once ("./OtroDispositivo/Nagra.php");
														include_once ("./OtroDispositivo/NagraValida.php");
													?>
										<!-- NAGRA fin -->
										
										<div class="col-lg-12">
											<br />
											<label>¿ Verifico en otro Dispositivo ?</label><br />
                                			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											<label class="radio-inline">
												<input name="otrodispositivo" id="otrodispositivo" value="SI" onclick="SiDispositivo()" type="radio" name="SI" required="required"/>
												SI
											</label>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											<label class="radio-inline">
												<input name="otrodispositivo" id="otrodispositivo" value="NO" onclick="NoDispositivo()" type="radio" name="NO" required="required"/>
												NO
											</label>
								    		<br /><br />
                                        </div>
                                        
                                        <!-- OTRODISPOSITIVO inicio -->
													<?php
														include_once ("./OtroDispositivo/Otro.php");
													?>
										<!-- OTRODISPOSITIVO fin -->		
						             	
						             	<div class="form-group">
											<label>Observación</label>
											<textarea maxlength="120" class="form-control" name="observacion" id="observacion" rows="2" placeholder="Descripción Básica" required="required"></textarea>
										</div>
												
										 <div>
                                        	<div class="col-lg-4">
							
												<input type="submit" class="btn btn-success" value="Generar Guión"/>
						
											</div>
										</div>
										
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
