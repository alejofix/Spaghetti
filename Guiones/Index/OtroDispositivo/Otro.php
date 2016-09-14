	<script type="text/javascript">
		function SiDispositivo(){
	    document.getElementById('ocultorecreadoSI').style.display = 'block';
	    document.getElementById('ocultorecreadoNO').style.display = 'none';
		}
	    function NoDispositivo(){
	    document.getElementById('ocultorecreadoNO').style.display = 'block';
	    document.getElementById('ocultorecreadoSI').style.display = 'none';
		}
	</script>
	
	<div class="form-group" id='ocultorecreadoSI' style='display:none;'>
		
										<div class="col-lg-12">
                                            <label>¿ En otro Dispositivo funcioná Correctamente ?</label><br />
                                        	<select class="form-control" name="otro" id="otro">
                                        		<option value="">Seleccione una Opción</option>
												<optgroup>
													<option value="Si">SI</option>
	                                                <option value="No">NO</option>
												</optgroup>
                                            </select><br />
                                        </div>
										
										<div class="col-lg-12">
                                            <label>¿ En que Dispositivo Adicional Verifico ?</label><br />
                                      		<select class="form-control" name="dispositivo" id="dispositivo">
                                            	<option value="">Seleccione una Opción</option>
												<optgroup>
													<option value="PC MAC">PC MAC</option>
	                                                <option value="PC Windows">PC Windows</option>
	                                                <option value="Portatil MAC">Portatil MAC</option>
	                                                <option value="Portatil Windows">Portatil Windows</option>
	                                                <option value="Smart TV">Smart TV</option>
	                                                <option value="Smartphone Android">Smartphone Android</option>
	                                                <option value="Smartphone IOS">Smartphone IOS</option>
	                                                <option value="Tablet Android">Tablet Android</option>
	                                                <option value="Tablet IOS">Tablet IOS</option>
	                                                <option value="TV Player">TV Player</option>
	                                                <option value="Xbox">Xbox</option>
												</optgroup>
                                        	</select><br />
					                    </div>
										
										<div class="form-group">
											<label>Marca dispositivo</label><br />
											<div class="col-lg-12">
												<input class="form-control" type="text" name="marca" id="marca"   placeholder="Describa Marca" maxlength="20" />
												<p class="help-block">Ej.: Samsung, LG, Sony, Lenovo, Etc ...</p>
											</div>
										</div>
										
	</div>
	<div class="form-group" id='ocultorecreadoNO' style='display:none;'>
	 	
	</div>