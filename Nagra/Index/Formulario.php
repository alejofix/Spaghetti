<!DOCTYPE html>
<html lang="es">
<?php
include_once ("../Base/Head.html");
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
						Por favor complete el Formulario 
					</div>
					<div class="panel-body">
						<div class="row">
					
								<form id="Form" method="POST" action="1registra.php">
									<div class="col-lg-12">
										
										<div class="form-group">
										<!-- VALIDACIÓN CTA  BD  -->
													<?php
														include_once ("./1/cuenta.php");
													?>
										<!-- VALIDACIÓN CTA  BD   -->
											
										</div>
										
										<div class="form-group">
											<label>¿En qué producto presenta la falla?</label>
											<select name="RAZON" id="razon" class="form-control" required>
												<option value="">Escoja una Opcion</option>
												<optgroup>
													<?php foreach ($resultado AS $param): ?>
														
														<option value="<?php echo $param['ID'] ?>">
															<?php echo $param['RAZON'] ?>
														</option>
														
													<?php endforeach; ?>
												</optgroup>
											</select>
										</div>
										
										<div class="form-group">
											<label>Síntoma de la falla</label>
											<input name="REFERENCIA" id="referencia" type="text" class="form-control" placeholder="Ingrese el síntoma que reporta el usuario" maxlength="70" required="required" />
										</div>
										
										<div class="form-group">
											<label>Descripción  de la falla</label>
											<textarea name="DESCRIPCION" id="descripcion" class="form-control" rows="3" placeholder="Describa la falla que reporta el Usuario" maxlength="140" required="requiered" ></textarea>
										</div>
										
										<div class="form-group">
										
											<label>Síntoma Recreado</label><br />
											<div class="col-lg-6">
												<p>¿Es posible recrear el Síntoma?</p>
											</div>
											
											<div class="group-option">
													
													&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
													<label class="radio-inline">
														<input name="SINTOMARECREADO" id="sintomarecreado" value="1" onclick="SiRecreado()" type="radio" name="SI" required="required"/>
														SI
													</label>
													&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
													<label class="radio-inline">
														<input name="SINTOMARECREADO" id="sintomarecreado" value="0" onclick="NoRecreado()" type="radio" name="NO" required="required"/>
														NO
													</label>
											</div>
										
										</div>
												<!-- SISTEMA RECREADO -->
													<?php
														include_once ("./1/sistemarecreado.php");
													?>
												<!-- SISTEMA RECREADO  -->
										
										<div class="form-group">
											<label>Error</label><br />
											<div class="col-lg-6">
												<p>¿Con qué frecuencia se presenta la Falla?</p>
											</div>
											<div class="col-lg-6">
												<select name="ERROR" id="error" class="form-control" required>
												<option value="">Escoja una Opcion</option>
												<optgroup>
													<?php foreach ($resultado2 AS $param): ?>
														
														<option value="<?php echo $param['ID'] ?>">
															<?php echo $param['FRECUENCIA'] ?>
														</option>
														
													<?php endforeach; ?>
												</optgroup>
												</select>
											</div>
										</div>
										
										<div class="form-group">
											<?php
												include_once ("./1/falla.php");
											?>
										</div>
										
										<div class="form-group">
											
											<label>Gestionado Por</label><br />
											<div class="col-lg-6">
												<p>Usuario CCAA</p>
												<input name="USUARIO" id="usuario" type="text" class="form-control" placeholder="Ingrese su usuario de CCAA" maxlength="35" required="required" />
											</div>
											<div class="col-lg-6">
												<p>Empresa</p>
												<input name="EMPRESA" id="empresa" type="text" class="form-control" placeholder="Ingrese su Empresa" maxlength="35" required="required" />
											</div>
										
										</div>
										
										<br />
										<hr />
										
										<div class="form-group">
											
											<hr />
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											<button type="submit" class="btn btn-success">
												<input type="hidden" name="TIPO" id="tipo" value="1"/>
												Guardar
											</button>
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											<input onclick="formReset()"  type="button" class="btn btn-default" value="Borrar" />
											
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
