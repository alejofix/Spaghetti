<!DOCTYPE html>
<html lang="es">
<?php
    include_once ("../Base/Head.html");
    include_once ("../Funciones/Conexion.php");
?>
<body>

	<div class="panel-body">
		
		<!-- /.row -->
		<div class="row">
			<div class="col-lg-6">
				<div class="panel panel-primary">
					<div class="panel-heading">
						Traslado matriz Estrato 1 y 2  
					</div>
					<div class="panel-body">
						<div class="row">
					
								<form id="traslado" method="POST" action="Index.php">
									
                                    <div class="col-lg-12">
										<div class="form-group">
											<label>Cuenta de Suscriptor:</label><br />
											<div class="col-lg-6">
												<input autofocus="autofocus" name="CUENTA" type="cuenta" type="number" class="form-control" placeholder="# de Suscriptor" required="required" />
											</div>
										</div><br /><hr />
                                        
                                        <div class="form-group">
					                      <label>Ciudad Cuenta</label><br />
											<div class="col-lg-12">
												<input name="CIUDADACTUAL" type="ciudadactual" type="text" class="form-control" placeholder="Ciudad actual Cuenta" required="required" />
											</div>
                                  		</div>
                                        
                                        <div class="form-group">
					                        <label>Ubicación Traslado</label><br />
											<div class="col-lg-8">
												<input name="DIRECCIONTRASLADO" type="direcciontraslado" type="text" class="form-control" placeholder="Dirección Traslado" required="required" />
											</div>
                                            <div class="col-lg-4">
												<input name="NODOTRASLADO" type="nodotraslado" type="text" class="form-control" placeholder="Nodo Traslado" />
											</div>
                    					</div>
                                        
                                        <div class="form-group">
					                        <label> &nbsp;&nbsp;&nbsp;</label><br />
											<div class="col-lg-8">
												<input name="CIUDADTRASLADO" type="ciudadtraslado" type="text" class="form-control" placeholder="Ciudad Traslado" required="required" />
											</div>
                                            <div class="col-lg-4">
										          <select name="ESTRATOTRASLADO" class="form-control" required> 
                                                        <option value="">Seleccione Estrato</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                  </select>
                                         	</div>
                    					</div>
                                        
                                        
                                        <br /><hr />
                               		</div>
                                    
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <div class="col-lg-4">
    									       <input type="submit" name="SUBMIT" class="btn btn-success" value="Guardar"/>
    										</div>
                                        </div>
									</div>		
	
    							</form>
								<?php
							         
                                        if(isset($_POST['SUBMIT']))
									{
									      // print_r($_POST);  
										  include_once ("Mensaje.php");
                                          unset($_POST['SUBMIT']);
                                          $a=date("Y-m-d H:i:s");
										  $bd_datos=conectarse();
                                          
                                          mysql_query("INSERT INTO tbl_ccaa_pri_traslados_cancelaciones
											(CUENTA, CIUDADACTUAL, DIRECCIONTRASLADO, CIUDADTRASLADO, NODOTRASLADO, ESTRATOTRASLADO, FECHA) 
												VALUES
											('".$_POST['CUENTA']."',
											 '".$_POST['CIUDADACTUAL']."',
											 '".$_POST['DIRECCIONTRASLADO']."',
											 '".$_POST['CIUDADTRASLADO']."',
                                             '".$_POST['NODOTRASLADO']."',
                                             '".$_POST['ESTRATOTRASLADO']."',
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
